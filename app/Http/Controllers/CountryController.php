<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Validator;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $countries = Country::all();
        return view('general.country',compact('countries'));
    }

    public function find(string $code){
        $country = Country::where('code',$code)->first();

        if(empty($country)){
            return response()->json([
                "status" => false,
                "message" => "data not found",
                "data" => null
            ],404);
        }
        else{
            return response()->json([
                "status" => true,
                "message" => "sucess",
                "data" => $country 
             ],200);
        }
       
    }

    public function findJoinCity(string $code){
        $countries = Country::join('gen_r_city','gen_r_country.code','=','gen_r_city.country')
        ->where('gen_r_country.code',$code)
        ->get();

        if(is_null($countries)){
            return response()->json([
                'status' => false,
                'message' => 'empty',
                'data' => null

            ],404);
        }else{
            return response()->json([
                'status' => true,
                'message' => 'data found',
                'data' => $countries

            ],200);
        }
    }


    public function store(Request $request)
    {
       $country = new Country();
       $required = [
        'code' => 'required',
        'nama' => 'required'
       ];

       $validator = Validator::make($request->all(),$required);

       if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'failed',
                'data' => $validator->errors()
            ],404);
       }
       $country->code = $request->code;
       $country->nama = $request->nama;
       $country->save();
       return response()->json([

            'status' => true,
            'message' => 'success'

       ],200);
    }

   
    public function update(Request $request, Country $country)
    {
        $country = Country::where('code',$country->code);
        if(is_null($country)){
            return response()->json([
                'status' =>false,
                'message' => 'data not found',
                'data' => null

            ],404);
        }
        $required = [
            'code' => 'required',
            'nama' => 'required'
        ];

        $validator = Validator::make($request->all(),$required);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'failed',
                'data' => $validator->errors()
            ],404);
        }

        $country->code = $request->input('code');
        $country->nama = $request->input('nama');
        
        Country::where('code',$country->code)->update([
            'code' => $country->code,
            'nama' => $country->nama
        ]);

        return response()->json([
            'status' => true,
            'message' => 'update success'

        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $code)
    {
        $country = Country::where('code',$code)->delete();
        
        return response()->json([
            'status' => true,
            'message' => 'delete success'
        ],200);
    }
}
