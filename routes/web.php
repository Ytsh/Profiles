<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/ad', function () {
    return view('admin.index');
});

Auth::routes();

Route::post('/upload', 'HomeController@uploadAvatar') ->name('avatar.upload');

Route::get('/personal', 'PersonalController@index')->name('personal.index');
Route::post('/personal', 'PersonalController@store')->name('personal.store');
Route::put('/personal/update', 'PersonalController@update')->name('personal.update');

Route::get('/professional', 'ProfessionalController@index')->name('professional.index');
Route::post('/professional', 'ProfessionalController@store')->name('professional.store');
Route::put('/professional/update', 'ProfessionalController@update')->name('professional.update');

Route::get('/academic','AcademicController@index')->name('academic.index');
Route::post('/academic', 'AcademicController@store')->name('academic.store');
Route::put('/academic/update', 'AcademicController@update')->name('academic.update');

Route::get('/profile', 'ProfileController@index');










Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
