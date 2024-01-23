<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleAuthController extends Controller
{
    
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }


    public function callBackGoogle(){
        try{
            
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google',$google_user->getId())->first();  
            
            if(!$user){
                $new_user = User::create([
                    
                    'name' => $google_user->getName(),
                    'email'=> $google_user->getEmail(),
                    'google' => $google_user->getId(),
                    'usertype' => 4,

                ]);

                Auth::login($new_user);
                return redirect('/')->with('success','Login Success');
            }else{
                Auth::login($user);
                return redirect('/')->with('success','Login Success');
            }

        }catch(\Throwable $e){
            dd('Something Went Wrong'.$e);
        }
    }
}
