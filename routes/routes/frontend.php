<?php
/**
 */



    Route::group(['namespace'  => 'Frontend\Doctors'], function(){

        Route::resource('our-doctors', 'DoctorsController');
    });


    Route::group(['namespace'  => 'Frontend\Appointments','middleware'=>'auth:patient'], function(){
        Route::get('appointment/available-time/{day}', 'AppointmentsController@getScheduleTime');
        Route::resource('appointment', 'AppointmentsController');
    });
