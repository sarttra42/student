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
    return view('welcome');
});

Route::get('facultys','FacultyController@index')->name('facultys');
Route::get('student','StudentController@index')->name('student');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
