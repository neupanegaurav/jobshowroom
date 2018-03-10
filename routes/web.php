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
    return view('index');
});
Route::get('/registeruser','Authentication\RegistrationController@registeruser');
Route::get('/login','Authentication\RegistrationController@login');
Route::post('/jobseekerlogin','Authentication\RegistrationController@loginuser');
Route::post('/jobseeker','Authentication\RegistrationController@jobseekerregister');
Route::resource('/basicinfo','Jobseeker\JobseekerInfoController');
Route::resource('/educationinfo','Jobseeker\JobseekerEducationInfoController');
Route::resource('/workexperience','Jobseeker\JobseekerWorkExperienceController');
Route::get('/jobseeker/profile','Jobseeker\JobseekerController@profile');
Route::get('jobseeker/overview','Jobseeker\JobseekerController@overview');


