<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\City;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{

    public function viewcustomer(){
        $customer = Customer::all();
        return view('project.customer',compact('customer'));
    }

   

    public function addcustomer(Request $request)
    {
        $customer = new Customer();

        $required = [
            "idcustomer" => "required",
            "namacustomer" => "required",
            "adress" => "required",
            "city" => "required",
        ];

        $validator = Validator::make(request()->all(),$required);
        if($validator->fails()){
            return redirect('/add_customer_view')->withErrors($validator)->withInput($request->all());

        }

        $customer->idcustomer   = $request->idcustomer;
        $customer->namacustomer = $request->namacustomer;
        $customer->adress       = $request->adress;
        $customer->city         = $request->city;
        
       

        $customer->save();

        return redirect('/customer')->with('success','insert customer success');

    }


    public function addcustomer_session(Request $request){
        if(Auth::check()){
            $user = Auth::user();
            $iduser = $user->id;
        }
        
        $customer = new Customer();
        $required = [
            "idcustomer" => "required",
            "namacustomer" => "required",
            "adress" => "required",
            "city" => "required",

        ];

        $validator = Validator::make(request()->all(),$required);
        if($validator->fails()){
            return response()->json([
                'status' => 'false',
                'message' => 'failed register',
                'data' => $validator->errors()
            ]);
        }
        
        $customer_check = Customer::select("idcustomer","namacustomer","adress","city","user")
        ->where("user",$iduser)
        ->first();

        if(is_null($customer_check)){
            $customer->idcustomer = $request->idcustomer;
            $customer->namacustomer = $request->namacustomer;
            $customer->adress = $request->adress;
            $customer->city = $request->city;
            $customer->user = $iduser;
            $customer->save();
            return redirect('/customer_session/{{$iduser}}')->with('success','insert profile success');
        }else{
            return redirect('/addcustomer_session_view')->with('failed','Data sudah tersedia');
        }

    }


    public function addcustomer_sessionview(){
        return view('customer.addcustomer_session');
    }


    public function getcustomer_session(){
        if(Auth::check()){
            $iduser = Auth::user()->id;
        }

        $customer_session = Customer::select("customer.idcustomer","customer.namacustomer",
                                             "customer.adress","customer.city","users.name","users.email")
        ->join("users","users.id","=","customer.user")
        ->where("user",$iduser)
        ->first();

        return view('customer.customer_session',compact('customer_session'));
    }

    public function get_customer_id($idcustomer){
        $customer = Customer::select('idcustomer','namacustomer','adress','city')
        ->where('idcustomer',$idcustomer)
        ->first();
       return view('project.update_customer_view',compact('customer'));

    }


    public function update_customer(Request $request, $idcustomer){
        $customer = Customer::select('idcustomer','namacustomer','adress','city')
        ->where('idcustomer',$idcustomer)
        ->first();

        $customer->idcustomer = $request->input('idcustomer');
        $customer->namacustomer = $request->input('namacustomer');
        $customer->adress = $request->input('adress');
        $customer->city = $request->input('city');

        Customer::where('idcustomer',$idcustomer)->update([
            'idcustomer' => $customer->idcustomer,
            'namacustomer' => $customer->namacustomer,
            'adress' => $customer->adress,
            'city' => $customer->city
        ]);

        return redirect('/customer')->with('success','update customer success');

    }

    public function search_customer(Request $request){
        $customer = new Customer();
        $customer->namacustomer = $request->input('namacustomer');
        $namacustomer = $customer->namacustomer;

        $customer_search = Customer::select('idcustomer','namacustomer','adress','city')
                           ->where('namacustomer','LIKE','%'.$namacustomer.'%')
                           ->get();

        if(is_null($customer_search)){
            return view('project.search_customerview');
        }else{

            return view('project.search_customerview',compact('customer_search'));
        }
       
    }

    public function delete_customer($idcustomer){
        Customer::where('idcustomer',$idcustomer)->delete();
        return redirect('/customer')->with('success','delete customer success');

    }

    
    public function viewmax_customer(){
        $customer_max = $this->maxcustomer();
       
        return view('project.add_customer',compact('customer_max'));
    }

    public function cities()
    {
        $cities = City::all();
        return $cities;
    }

    public function get_maxcust(){
        $max_id = Customer::max('idcustomer');
        return $max_id;
    }

    public function maxcustomer(){
        $max_id = $this->get_maxcust();

        $customer_max = Customer::orderBy('idcustomer', 'desc')
        ->where('idcustomer',$max_id)
        ->get();
        return $customer_max;
       
    }

    public function viewcity_dropdown(){
        $cities = $this->cities();
        $customer_max = $this->maxcustomer();
        $data = $cities->concat($customer_max);
        return view('project.add_customer', compact('data'));
    }
    

    
}
