<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CityController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


#Users
Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);

#Country
Route::get('country',[CountryController::class,'index']);
Route::get('country/{code}',[CountryController::class,'find']);
Route::post('add_country',[CountryController::class,'store']);
Route::put('update_country/{code}',[CountryController::class,'update']);
Route::delete('delete_country/{code}',[CountryController::class,'destroy']);
Route::get('join_city/{code}',[CountryController::class,'findJoinCity']);

#City
Route::get('city',[CityController::class,'index']);
Route::get('city/{code}',[CityController::class,'find']);
Route::post('add_city',[CityController::class,'store']);
Route::put('update_city/{code}',[CityController::class,'update']);
Route::delete('delete_city/{code}',[CityController::class,'destroy']);

#Customer
Route::get('customers_joins_project',[CustomerController::class,'ShowAllJoinProject']);
Route::get('customer_joins_project/{id}',[CustomerController::class,'ShowJoinProjectById']);


