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

Route::resource('/admin/levels','Admin\Level\LevelController');

Route::resource('/admin/materials', 'Admin\Material\MaterialController');

//route for admins admin
Route::resource('/admin/admins','Admin\Admin\AdminController',['only'=>['index','create','store']]);
Route::get('/admin/admins/{id}/block','Admin\Admin\AdminController@blocked');
Route::get('/admin/admins/{id}/unblock','Admin\Admin\AdminController@unblocked');

//route for tatcher admin
Route::resource('/admin/teachers','Admin\Teacher\TeacherController',['only'=>['index']]);
Route::get('/admin/teachers/{id}/block','Admin\Teacher\TeacherController@blocked');
Route::get('/admin/teachers/{id}/unblock','Admin\Teacher\TeacherController@unblocked');

//route for student admin
Route::resource('/admin/students','Admin\Student\StudentController',['only'=>['index']]);
Route::get('/admin/students/{id}/block','Admin\Student\StudentController@blocked');
Route::get('/admin/students/{id}/unblock','Admin\Student\StudentController@unblocked');

// teacher route
Route::get('/teacher/login','Teacher\TeacherController@login');
Route::get('/teacher/register','Teacher\TeacherController@register');




