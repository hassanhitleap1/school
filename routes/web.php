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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// admin route
Route::get('/admin','Admin\AdminController@index');
Route::get('/admin/login','Admin\AdminController@login');
Route::get('/admin/register','Admin\AdminController@register');


Route::resource('/admin/students','Admin\StudentController');
Route::resource('/admin/levels','Admin\LevelController');


// teacher route
Route::get('/teacher/login','Teacher\TeacherController@login');
Route::get('/teacher/register','Teacher\TeacherController@register');
Route::get('/teacher','Teacher\TeacherController@index');



