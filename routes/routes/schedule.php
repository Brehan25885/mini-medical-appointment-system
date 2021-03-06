<?php
/**
 * All route names are prefixed with 'doctor.'.
 */



    Route::group(['namespace'  => 'Schedule'], function(){
        Route::get('schedule/{schedule}/delete', 'ScheduleController@destroy');
        Route::get('schedule/list', 'ScheduleController@listView');

        Route::resource('schedule', 'ScheduleController');
        });
