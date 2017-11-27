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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/markets','MarketController@showService');

Route::get('/markets/{id}','MarketController@getMarketById');
Route::get('/test','MarketController@test');
Route::get('/jobs','JobController@showService');

Route::get('/jobs/{id}','JobController@getJobById');

Route::post('/auth','JobController@isAuth');
Route::post('/register','JobController@regester');

Route::get('/distance/{lat}/{long}/{cat}','MarketController@distance');

Route::get('/guideCategories','CategoryController@show');


Route::get('/sliders','SliderController@showAPI');

Route::get('/getSubByCat/{id}','MarketController@getSubByCat');
showCategory

Route::get('/jopCategory','JopController@showCategory');
