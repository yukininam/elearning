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

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('exams', 'ExamsController@index')->name('exams');
Route::get('grades', 'GradesController@index')->name('grades');

Route::get('login',	'AuthController@login');
Route::post('login', 'AuthController@doLogin');

Route::get('logout', 'AuthController@logout');

Route::get('add-user',	'UserController@addUser');
Route::get('users',	'UserController@viewUser');

Route::group(array('before' => 'ajax'), function() {
	Route::post('add-user/save',	'UserController@saveUser');
});
