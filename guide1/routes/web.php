<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/efw','indexController@index');

Route::get('/','indexController@showIndex');

Route::get('/company-add', function () {
    return view('company-add');
});

Route::get('/page-contact', function () {
    return view('page-contact');
});
Route::get('/page-blog','indexController@showblog');

    Route::get('/company-list', function () {
    return view('company-list');
});
    Route::get('/user-login', function () {
        return view('user-login');
    });

   Route::get('/user-register', function () {
       return view('user-register');
   });

   Route::get('/company-detail', function () {
       return view('company-detail');
   });

  Route::get('/page-post', function () {
      return view('page-post');
  });

  Route::get('/page-faq', function () {
      return view('page-faq');
  });

    Route::get('/job-list', function () {
    return view('job-list-1');
});

    Route::get('/company-list-map', function () {
    return view('company-list-map');
});
Route::get('/slider','SliderController@show');
Route::get('/addSlider','SliderController@addSlider');
Route::post('/addSlider_ar','SliderController@store_ar');

Route::get('/deleteslider/{id}','SliderController@delete');
Route::post('/editSlider/{id}','SliderController@update');
Route::get('/newsTicker','NewsTickerController@show');

Route::post('/editTiker/{id}','NewsTickerController@update');

Route::get('/addTicker','NewsTickerController@addTicker');
Route::post('/addNewsTicker','NewsTickerController@store');
Route::get('/deletetikker/{id}','NewsTickerController@delete');

Route::get('/faq','FAQController@show');

Route::get('/addFAQ','FAQController@addFAQ');

Route::post('/addFAQs','FAQController@store');

Route::get('/deletefaq/{id}','FAQController@delete');

Route::post('/editeFAQs/{id}','FAQController@update');


Route::get('/contact','ContactController@show');
Route::post('/addMap','ContactController@addmap');
Route::post('/editeSocial','ContactController@update');
Route::get('/area','AreaController@show');
Route::get('/addArea','AreaController@addArea');
Route::post('/addNewArea','AreaController@store');
Route::get('/area/delete/{id}','AreaController@delete');

Route::post('/editArea/{id}','AreaController@update');

Route::get('/markets','MarketController@show');

Route::get('/addMarket','MarketController@addMarket');

Route::post('/addNewMarket','MarketController@store');
Route::get('/approve/{id}','MarketController@approve');
Route::get('/delete/{id}','MarketController@delete');

Route::post('/editMarket/{id}','MarketController@update');
Route::get('/addNewspaper','NewsPapperController@addNewsPaper');

Route::post('/storeNewsPaper','NewsPapperController@store');

Route::get('/newspaper','NewsPapperController@show');

Route::get('/addType','ItemTypeController@show');



Route::post('/addTypeItem','ItemTypeController@store');


Route::get('/deletetype/{id}','ItemTypeController@delete');



Route::post('/editType/{id}','ItemTypeController@update');


Route::post('/editNewsPaper/{id}','NewsPapperController@update');
Route::get('/view/{id}','NewsPapperController@view');


Route::get('/addItem/{id}','NewsPapperController@addItem');




Route::post('/storeitem/{id}','NewsPapperController@storeitem');


Route::get('/jops','JobController@show');
Route::get('/addJobs','JobController@addJobs');



Route::post('/addNewJob','JobController@store');




Route::get('/deleteJob/{id}','JobController@delete');


Route::post('/addcategory','JobController@storecat');
Route::get('/addcate','JobController@addcats');

Route::get('/test', function () {
    return view('admin.test');
});

Route::get('/isMain/{id}','MarketController@ismain');

Route::get('/isNotMain/{id}','MarketController@isnotmain');
Route::get('/deletecat/{id}','MarketController@deletecat');

Route::get('/addMarketCat','MarketController@addMarketCat');
Route::get('/tender','TenderController@show');


Route::post('/storeCategory','MarketController@storeCategory');
Route::get('/viewSubCat/{id}','MarketController@viewSubCat');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
