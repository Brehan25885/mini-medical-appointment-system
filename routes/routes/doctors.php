<?php
/**
 * All route names are prefixed with 'doctor.'.
 */



    Route::group(['namespace'  => 'Doctors'], function(){

        Route::resource('doctor', 'DoctorsController');
        });
