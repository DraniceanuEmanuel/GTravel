<?php

use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::get('/login',[UserController::class,'login']);

Route::apiResource('trips',TripController::class)->middleware('auth:api');
Route::get('/trips/{slug}',[TripController::class,'singleBySlug']);
Route::apiResource('users',UserController::class)->middleware('auth:api');
