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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin/login','Admin\AdminController@login');
Route::get('/admin/register','Admin\AdminController@register');

// admin route
Route::group(['prefix' => '/admin','middleware' => ['admin']], function () { 

    // auth admin 
    Route::get('/','Admin\AdminController@index');
    
    //student 
   // Route::resource('/students','Admin\StudentController');
    //levels
    Route::resource('/levels','Admin\Level\LevelController');

    //materials
    Route::resource('/materials', 'Admin\Material\MaterialController');

    //categories
    Route::resource('/categories','Admin\Category\CategoryController');

    // defaut image cover helper 
    Route::resource('/cover_helpers','Admin\CoursesHelpers\CoverHelperController');

    //courses_helpers
    Route::resource('/courses_helpers','Admin\CoursesHelpers\CoursesHelperController');
    Route::resource('/courses_helpers/{idHelper}/units','Admin\CoursesHelpers\CoursesHelperUnitController');
    Route::resource('/courses_helpers/{idHelper}/units/{unitId}/lessons', 'Admin\CoursesHelpers\CoursesHelperUnitLessonController');
   

    //route for admins admin
    Route::resource('/admins','Admin\Admin\AdminController',['only'=>['index','create','store']]);
    Route::get('/admins/{id}/block','Admin\Admin\AdminController@blocked');
    Route::get('/admins/{id}/unblock','Admin\Admin\AdminController@unblocked');

    //route for tatcher admin
    Route::resource('/teachers','Admin\Teacher\TeacherController',['only'=>['index']]);
    Route::get('/teachers/{id}/block','Admin\Teacher\TeacherController@blocked');
    Route::get('/teachers/{id}/unblock','Admin\Teacher\TeacherController@unblocked');

    //route for student admin
    Route::resource('/students','Admin\Student\StudentController',['only'=>['index']]);
    Route::get('/students/{id}/block','Admin\Student\StudentController@blocked');
    Route::get('/students/{id}/unblock','Admin\Student\StudentController@unblocked');

});



// teacher route
Route::get('/teacher/login','Teacher\TeacherController@login');
Route::get('/teacher/register','Teacher\TeacherController@register');

Route::group(['prefix' => '/teacher','middleware' => ['teacher']], function () { 
    Route::get('/','Teacher\TeacherController@index');  
    
//  route courses for teacher
    Route::resource('/courses','Teacher\Courses\CoursesController');
    Route::get('/courses/{id}/delete-cover','Teacher\Courses\CoursesController@deleteCover');

    Route::resource('/courses/{id}/units','Teacher\Courses\CoursesUnitController');
    Route::resource('/courses/{courseId}/units/{unitId}/lessons', 'Teacher\Courses\CoursesUnitLessonController');
    Route::get('/courses/{courseId}/units/{unitId}/lessons/{id}/delete-image', 'Teacher\Courses\CoursesUnitLessonController@deleteVedio');
});

Route::get('/course','HomeController@course');
