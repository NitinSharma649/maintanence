<?php


Route::group(['namespace' => 'Panel'], function(){
    Route::view('/', 'panel.website.index')->name('index');
    
    Route::resource('profile', 'ProfileController');
    
    Route::group(['middleware'=>['role:panel,admin']], function() {
        Route::resource('employee', 'EmployeeController');

        
        Route::group(['prefix' => 'assign_job', 'as'=>'assign_job.'], function() {
            Route::get('/{assign_job}', 'AssignJobController@index')->name('index');
            Route::post('/', 'AssignJobController@store')->name('store');
        });
        
        Route::resource('complaint', 'ComplaintController');
    });
    Route::group(['middleware'=>['role:panel,engineer']], function() {
        Route::resource('jobs', 'JobsController');
        Route::get('jobs/changeStatus/{jobs}/{status}', 'JobsController@changeStatus')->name('jobs.changeStatus');
    });
});
