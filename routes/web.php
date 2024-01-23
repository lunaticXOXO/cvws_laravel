<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CountryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');     
});


Route::get('/register',function(){
    return view('auth.register');
});

Route::get('/register_customer',function(){
    return view('auth.register_customer');
});

Route::get('/login',function(){
    return view('auth.login');
});

Route::get('auth/google',[GoogleAuthController::class,'redirect'])->name('google-auth');
Route::get('auth/google/call-back',[GoogleAuthController::class,'callBackGoogle']);


Route::post('/register',[UserController::class,'register'])->middleware('guest');
Route::post('/register_customer',[UserController::class,'register_customer'])->middleware('guest');
Route::post('/login',[UserController::class,'login'])->middleware('guest');
Route::get('/logout',[UserController::class,'logout']);


Route::middleware(['auth','check.usertype:1'])->group(function () {
    #Customer
    Route::post('/add_customer',[CustomerController::class,'addcustomer']);
    Route::get('/add_customer_view',function(){
        return view('project.add_customer');
    });
    Route::get('/get_customer/{idcustomer}',[CustomerController::class,'get_customer_id']);
    Route::post('/update_customer/{idcustomer}',[CustomerController::class,'update_customer']);
    Route::get('/delete_customer/{idcustomer}',[CustomerController::class,'delete_customer']);
    Route::get('/search_customer',[CustomerController::class,'search_customer']);
    Route::get('/customer',[CustomerController::class,'viewcustomer']);
    Route::get('/add_customer_view',[CustomerController::class,'viewcity_dropdown']);

    Route::post('/add_project',[ProjectController::class,'add_project']);
    Route::get('/add_projectview',[ProjectController::class,'add_project_view']);
    Route::get('/project',[ProjectController::class,'get_project']);

});


Route::middleware(['auth','check.usertype:4'])->group(function (){
    Route::get('/customer_session/{user}',[CustomerController::class,'getcustomer_session']);
    Route::get('/addcustomer_session_view',[CustomerController::class,'addcustomer_sessionview']);
    Route::post('/addcustomer_session',[CustomerController::class,'addcustomer_session']);
    Route::get('/project_customer',[ProjectController::class,'get_project_customer']);
    Route::get('/project_customer/{idproject}',[ProjectController::class,'choose_project']);
    
});


Route::middleware(['auth','check.usertype:2'])->group(function (){
    Route::get('/country',[CountryController::class,'index']);
   
    
});




