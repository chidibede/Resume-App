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

Route::get('/', 'PagesController@home');
Route::get('/cv_view/{user}', 'PagesController@cv_view');



Auth::routes();

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/edit', 'ProfileController@edit');
Route::put('/profile/update', 'ProfileController@update');

// Generate CV Route
Route::get('/generate_cv', 'GenerateCvController@generate_cv');
Route::post('/updateProfession', 'GenerateCvController@updateProfession')->name('updateProfession');
Route::post('/updateLocation', 'GenerateCvController@updateLocation')->name('updateLocation');
Route::post('/updateEmail', 'GenerateCvController@updateEmail')->name('updateEmail');
Route::post('/updatePhone', 'GenerateCvController@updatePhone')->name('updatePhone');
Route::post('/createSkills', 'GenerateCvController@createSkills')->name('createSkills');
Route::patch('/updateSkills/{id}', 'GenerateCvController@updateSkills')->name('updateSkills');
Route::post('/createLanguages', 'GenerateCvController@createLanguages')->name('createLanguages');
Route::patch('/updateLanguages/{id}', 'GenerateCvController@updateLanguages')->name('updateLanguages');
Route::post('/createCurrentJob', 'GenerateCvController@createCurrentJob')->name('createCurrentJob');
Route::patch('/updateCurrentJob/{id}', 'GenerateCvController@updateCurrentJob')->name('updateCurrentJob');
