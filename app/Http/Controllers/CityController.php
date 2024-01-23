<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Validator;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();
        return $cities;
    }

    public function viewcity_dropdown(){
        $cities_available = City::all();
        return view('project.add_customer', compact('cities_available'));
    }

    public function find(string $code){
        $city = City::where('code', $code)->first();
        if(is_null($city)){
            return response()->json([
                'status'=> false,
                'message'=> 'data not found',
                'data' => null

            ],404);
        }else{

            return response()->json([
                'status'=> true,
                'message'=> 'data found',
                'data' => $city
            ],200);
        }
    }

    public function getidcity($codes){
        $idcity = City::select("codes")
        ->where("codes",$codes)
        ->first();

        return $idcity;


    }


   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $city = new City();
        $required = [
            'code' => 'required',
            'nama' => 'required',
            'country' => 'required'
        ];

        $validator = Validator::make($request->all(), $required);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'failed',
                'data' => $validator->errors()
            ],404);
        }

        $city->code = $request->code;
        $city->nama = $request->nama;
        $city->country = $request->country;

        $city->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            
        ],200);

    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        $city = City::where('code',$city->code);
        if(is_null($city)){
            return response()->json([
                'status' => false,
                'message' => 'data not found',
                'data' => null
            ],404);
        }

        $required = [
            'code' => 'required',
            'nama' => 'required',
            'country' => 'required',
        ];

        $validator = Validator::make($request->all(),$required);
        if($validator->fails()){
           return response()->json([
                'status' => false,
                'message' => 'failed',
                'data' => $validator->errors()
           ],404);
        }

        $city->code = $request->input('code');
        $city->nama = $request->input('nama');
        $city->country = $request->input('country');

        City::where('code',$city->code)->update([

            'code' => $city->code,
            'nama' => $city->nama,
            'country' => $city->country
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
      
        $city = City::where('code',$code)->delete();
        return response()->json([
            'status' => true,
            'message' => 'delete success'
        ]);
    }
}
