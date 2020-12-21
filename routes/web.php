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
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['register' => false]);

Route::get('/superAdmin', 'HomeController@superadmin')->name('suadmin.index');

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
        Route::post('/profile', 'ukm\UkmController@updateProfile')->name('ukm.editprofile');
        Route::post('/info', 'ukm\UkmController@informasiToko')->name('ukm.editinformasi');
        Route::post('/request', 'ukm\RequestAdsController@req')->name('ukm.requestads');
    });
});

Route::group(['middleware' => ['guest']], function(){
    Route::get('/index', 'guest\GuestController@home');
    Route::get('/daftar-toko', 'guest\GuestController@daftar')->name('regist.toko');
    Route::post('/regist-toko', 'guest\GuestController@formRegist')->name('regist.form');
    Route::get('store/{slug}', 'guest\GuestController@store');
    Route::get('/bantuan', 'guest\GuestController@help')->name('guest.help');
    Route::get('/{category}', 'guest\GuestController@category');
});
