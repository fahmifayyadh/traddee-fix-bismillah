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

Route::get('/', function () {
    return view('landingPage');
});
Route::get('/superAdmin', function () {
    return view('/admin/superAdmin');
});
Auth::routes();

//Route::get('/homepage', 'a');

Route::group(['middleware' => ['auth','checkRole:admin']], function(){
    Route::group((['prefix' => 'admins']), function () {
        Route::get('/', 'HomeController@admin')->name('admin.index');
        Route::resource('ads', 'admin\AdsController');
        Route::get('/req/{id}/acc', 'admin\AdsController@acc');
        Route::get('/req/{id}/download', 'admin\AdsController@download');
        Route::group(['prefix' => 'merchant'], function (){
            Route::get('/active/{id}', 'admin\UkmController@active')->name('admin.merchant.active');
            Route::get('/inactive/{id}', 'admin\UkmController@inactive')->name('admin.merchant.inactive');
//            Route::post('/search/{key}', 'admin\UkmController@search')->name('admin.merchant.search');
        });
    });
});

Route::group(['middleware' => ['auth','checkRole:ukm']], function() {
    Route::group((['prefix' => 'ukm']), function () {
        Route::get('/', 'HomeController@ukm')->name('merchant.index');
    });
});


Route::get('/home', 'HomeController@index')->name('home');
