<?php

/**
 * All route names are prefixed with 'doctor.'.
 */



    Route::group(['namespace'  => 'Appointments'], function(){

        Route::resource('my-appointments', 'AppointmentsController');
        });

