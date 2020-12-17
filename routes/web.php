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
    });
});

Route::get('/home', 'HomeController@index')->name('home');
