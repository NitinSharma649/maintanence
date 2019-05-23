<?php

Route::group(['namespace' => 'Panel', 'middleware'=>['role:panel,admin']], function() {
    Route::view('/', 'panel.website.index')->name('index');
    Route::resource('employee', 'EmployeeController');
    Route::resource('complaint', 'ComplaintController');
});
