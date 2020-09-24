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

Route::any('allData','ProductController@allData');

Route::post('add','ProductController@add');

Route::any('Welcome','HomeController@Welcome');

Route::post('addhome','HomeController@Welcomeadd');

// Route::any('Media','HomeController@Media');

// Route::any('Visit','HomeController@Visit');

Route::any('Footer','HomeController@Footer');
Route::post('addfooter','HomeController@Footeradd');

Route::any('About','AboutController@About');
Route::post('addabout','AboutController@Aboutadd');

Route::any('Slider','HomeController@Slider');
Route::post('addslider','HomeController@Slideradd');

Route::any('Brand','BrandController@Brand');
Route::post('addbrand','BrandController@Brandadd');

Route::any('Ourteam','OurteamController@Ourteam');
Route::post('addourteam','OurteamController@Ourteamadd');

Route::any('Pressrelease','PressreleaseController@Pressrelease');
Route::post('addpressrelease','PressreleaseController@Pressreleaseadd');

Route::any('Pressreleaseinfo','PressreleaseController@Pressreleaseinfo');
Route::post('addpressreleaseinfo','PressreleaseController@Pressreleaseinfoadd');







Route::any('allData','APIController@allData');

Route::POST('show','APIController@show');
