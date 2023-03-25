<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// User Profile Route
Route::get('/login/{cnic}/{pass}','ApiController\LoginController@show');

// User Profile Route
Route::apiResource('/UserProfile','ApiController\ProfileController');

// User Devices Route
Route::apiResource('/UserDevices','ApiController\UserDevices');

// Single Mobile Detail
Route::apiResource('/mobileDetail','ApiController\MobileDetail');

// Single Mobile History
Route::apiResource('/MobileHistory','ApiController\MobileHistory');

// Black Listed Devices
Route::apiResource('/BlackListed','ApiController\BlackListed');

// Location 

Route::apiResource('/location','ApiController\LocationController');

