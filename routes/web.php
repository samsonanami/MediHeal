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


Route::get('/','Logincontroller@home');
Route::get('/report','ReportController@index');
Route::post('/','Logincontroller@login');
Route::resource('/nurse','NurseController');
Route::resource('/doctor','DoctorController');

Route::get('/logout',function()
    {
        Auth::logout();
        return redirect('/');
    }
);