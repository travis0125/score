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

Route::prefix('student')->group(function () {
    Route::get('{student_no}', 'StudentController@getStudentData')
        ->where(['student_no' => 's[0-9]{10}'])
        ->name('student');
    Route::get('{student_no}/score/{subject?}', 'StudentController@getStudentScore')
        ->where(['student_no' => 's[0-9]{10}', 'subject' => '(chinese|english|math)'])
        ->name('student.score');
});

Route::get('board', 'BoardController@index');
Route::get('board/name', 'BoardController@name');

Route::prefix('redirect')->group(function () {
    Route::get('toIndex', 'RedirectController@toIndex');
    Route::get('toStudent/{student_no}', 'RedirectController@toStudent');
    Route::get('toStudentSubject/{student_no}/{subject?}', 'RedirectController@toStudentSubject');
});

Route::middleware('auth')->group(function () {
    Route::get('school/edit', 'SchoolController@edit');
    Route::post('school', 'SchoolController@store');
});

Route::get('login', 'AuthController@showLoginForm')->name('login');
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout')->name('logout');
