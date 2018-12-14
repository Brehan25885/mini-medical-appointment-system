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



include ('routes/home.php');
include ('routes/frontend.php');


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );


Route::get('/register/doctors','Auth\RegisterController@showRegisterationForm');
Route::post('/register/doctors','Auth\RegisterController@createDoctors')->name('doctor.register');


Route::group(['middleware' => 'auth:doctor',
            'namespace' => 'Doctors'], function () {

                                    include ('routes/doctors.php');
                                    include ('routes/schedule.php');
                                    include ('routes/appointments.php');

                            });

Route::group(['middleware'=>'auth:patient',
            'namespace' => 'Frontend'], function () {

                            });
