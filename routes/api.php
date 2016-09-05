<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
Route::resource('makers','MakerController',['except'=>['create','edit']]);
Route::resource('vehicles','VehicleController',['only'=>['create','edit','index']]);
Route::resource('makers.vehicles','MakerVehiclesController', ['except' => ['show','edit','create']]);