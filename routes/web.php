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

// Profile Routes
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/edit', 'ProfileController@edit');
Route::put('/profile/update', 'ProfileController@update');

// Generate CV view Routes
Route::get('/generate_cv', 'GenerateCvController@generate_cv');

// User Details Route in Generate CV
Route::post('/updateProfession', 'GenerateCvController@updateProfession')->name('updateProfession');
Route::post('/updateLocation', 'GenerateCvController@updateLocation')->name('updateLocation');
Route::post('/updateEmail', 'GenerateCvController@updateEmail')->name('updateEmail');
Route::post('/updatePhone', 'GenerateCvController@updatePhone')->name('updatePhone');

// Skills Route
Route::post('/createSkills', 'GenerateCvController@createSkills')->name('createSkills');
Route::patch('/updateSkills/{id}', 'GenerateCvController@updateSkills')->name('updateSkills');

// Language Route
Route::post('/createLanguages', 'GenerateCvController@createLanguages')->name('createLanguages');
Route::patch('/updateLanguages/{id}', 'GenerateCvController@updateLanguages')->name('updateLanguages');

// Current Job Routes
Route::post('/createCurrentJob', 'GenerateCvController@createCurrentJob')->name('createCurrentJob');
Route::patch('/updateCurrentJob/{id}', 'GenerateCvController@updateCurrentJob')->name('updateCurrentJob');

// Former Jobs Routes
Route::post('/createFormerJobs', 'GenerateCvController@createFormerJobs')->name('createFormerJobs');
Route::patch('/updateFormerJobs/{id}', 'GenerateCvController@updateFormerJobs')->name('updateFormerJobs');

// Education Routes
Route::post('/createEducation', 'GenerateCvController@createEducation')->name('createEducation');
Route::patch('/updateEducation/{id}', 'GenerateCvController@updateEducation')->name('updateEducation');
