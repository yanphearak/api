<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('home',function(){
    return response()->json([
        "name"         =>"Phearak | យ៉ាន់ ភារក្ស",
        "description"  =>"Hello I'm Phearak, another IT guy on the Earth planet.😁",
    ],200);
});
Route::get('/sendNotifi','NotificationController@sendTelegram');
Route::post('/sendFeedBack','NotificationController@sendFeedBack');
