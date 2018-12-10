<?php
/**
 * All route names are prefixed with 'doctor.'.
 */


Route::group(['namespace'  => 'Auth','as'=>'doctor.'], function(){

   /*  Route::get('doctor/login', 'LoginController@showDoctorLoginForm')->name('login');
    Route::post('doctor/login', 'LoginController@doctorLogin')->name('login.submit');
 */

    });

    Route::group(['namespace'  => 'Doctors'], function(){

        Route::resource('doctor', 'DoctorsController');
        });
