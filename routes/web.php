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

//Panel routes starts
Route::group(['namespace' => 'Panel', 'prefix'=> 'panel', 'as'=>'panel.'], function () {
    Auth::routes();
});//routes are not have panel middleware

//Vendor routes starts
// Route::group(['namespace' => 'Vendor', 'prefix'=> 'vendor', 'as'=>'vendor.'], function () {
//     Auth::routes();
// });//routes are not have vendor middleware

Auth::routes();

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
    
    Route::get('/maintenance', 'MaintenanceController@index')->name('maintenance.index');
    Route::post('/maintenance', "MaintenanceController@store")->name('maintenance.store');
});