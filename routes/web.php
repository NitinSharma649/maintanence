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
    return view('website.index');
});


Auth::routes();

//Admin routes starts
Route::group(['namespace' => 'Admin', 'prefix'=> 'admin', 'as'=>'admin.'], function () {
    Auth::routes();
});//routes are not have admin middleware

//Vendor routes starts
Route::group(['namespace' => 'Vendor', 'prefix'=> 'vendor', 'as'=>'vendor.'], function () {
    Auth::routes();
});//routes are not have vendor middleware


Route::get('/home', 'HomeController@index')->name('home');
