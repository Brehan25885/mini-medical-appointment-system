<?php
/**
 * All route names are prefixed with 'doctor.'.
 */



    Route::group(['namespace'  => 'Frontend\Doctors'], function(){

        Route::resource('our-doctors', 'DoctorsController');
        });
