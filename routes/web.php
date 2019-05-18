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


Route::group(['namespace' => 'Website'], function(){
    Route::view('/', 'website.index')->name('index');
    Route::view('/about-us', 'website.about')->name('about-us');
    Route::view('/blogs', 'website.blogs')->name('blogs');
    Route::view('/blogs/{blogs}', 'website.blog_detail')->name('blogs.show');
    Route::view('/services', 'website.services')->name('services');
    Route::view('/prices', 'website.prices')->name('prices');
    Route::view('/faq', 'website.faq')->name('faq');
    Route::view('/contact', 'website.contact')->name('contact');
    Route::view('/gallery', 'website.gallery')->name('gallery');
});