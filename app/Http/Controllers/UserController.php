<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    // public function register_view(){
    //     return view('auth.register');
    // }

    public function register(Request $request){
        $user = new User();
        $required = [
            "name"          => "required",
            "email"         => "required",
            "password"      => "required",
            "repassword"    => "required",
            "usertype"      => "required"
        ];


        $validator = Validator::make(request()->all(), $required);
        if ($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'failed register',
                'data' => $validator->errors()
            ]);
        }

        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->password     = bcrypt($request->password);
        $user->usertype     = $request->usertype;

        $user->save();
      
        return redirect('/login')->with('success','Registration Succed');
    }


    public function register_customer(Request $request){
        $user = new User();
        $required = [
            'name' => 'required',
            'email'=> 'required',
            'password'=> 'required',
            'repassword' => 'required',

        ];

        $validator = Validator::make(request()->all(),$required);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'failed register',
                'data' => $validator->errors()
            ]);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->usertype = 4;

        $user->save();

        return redirect('/login')->with('success','Registration Success');

    }

    public function login(Request $request){
        $user = new User();
        $required = [
            "email" => "required",
            "password" => "required",
            
        ];

        $validator = Validator::make(request()->all(), $required);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'failed',
                'data' => $validator->errors()
            ],400);
        }

        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $logininfo = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($logininfo)){
            $request->session()->regenerate();
            return redirect('/')->with('success','Login Success');
        }else{
            return redirect('/login')->withErrors('failed','Username dan password yang dimasukan tidak sesuai');
        }
       

    }

  public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
 
    return redirect('/');
  }
}
