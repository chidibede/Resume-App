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
Route::post('/update_profession', 'GenerateCvController@updateProfession')->name('updateProfession');
Route::post('/update_location', 'GenerateCvController@updateLocation')->name('updateLocation');
Route::post('/update_email', 'GenerateCvController@updateEmail')->name('updateEmail');
Route::post('/update_phone', 'GenerateCvController@updatePhone')->name('updatePhone');
Route::post('/create_skills', 'GenerateCvController@createSkills')->name('createSkills');
