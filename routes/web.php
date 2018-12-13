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

Route::get('/', function () {
    return view('frontend.home.home');
})->name('home');

Auth::routes();

Route::get('/register/doctors', function () {
    return view('frontend.auth.doctors-register');
});
Route::post('/register/doctors','Auth\RegisterController@createDoctors')->name('doctor.register');

// Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth:doctor'], function () {

                                    include ('routes/doctors.php');
                                    include ('routes/schedule.php');

                            });

Route::group(['middleware'=>'auth:patient'], function () {

                                    include ('routes/patients.php');
                            });
