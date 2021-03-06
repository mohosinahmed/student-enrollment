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
    return view('student_login');
});

Route::get('admin', function () {
    return view('admin.admin_login');
});
Route::post('admin-login', 'AdminController@adminLogin');
Route::get('dashboard', 'AdminController@adminDashboard');

Route::get('add-student', 'StudentController@create');
Route::post('add-student', 'StudentController@store');
Route::get('all-students', 'StudentController@index');

Route::get('cse', 'StudentController@cse');
Route::get('bba', 'StudentController@bba');
Route::get('eee', 'StudentController@eee');
Route::get('ece', 'StudentController@ece');