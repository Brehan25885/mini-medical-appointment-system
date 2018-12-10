<?php
/**
 * All route names are prefixed with 'patient.'.
 */

Route::group(['namespace'  => 'Auth','as'=>'doctor.'], function(){

    Route::get('doctor/login', 'LoginController@showDoctorLoginForm')->name('login');
    Route::post('doctor/login', 'LoginController@doctorLogin')->name('login.submit');


    });

Route::group(['namespace'  => 'Patients'], function(){

Route::resource('patient', 'PatientsController');
});
