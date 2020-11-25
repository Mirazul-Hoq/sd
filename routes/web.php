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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('teacher/home', 'TeacherController@index')->name('teacher.home');
Route::get('teacher', 'Teacher\LoginController@showLoginForm')->name('teacher.login');
Route::post('teacher', 'Teacher\LoginController@login');
Route::post('teacher/logout', 'Teacher\LoginController@logout')->name('teacher.logout');
Route::get('teacher-password/confirm', 'Teacher\ConfirmPasswordController@showConfirmForm')->name('teacher.password.confirm');
Route::post('teacher-password/confirm', 'Teacher\ConfirmPasswordController@confirm');
Route::post('teacher-password/email', 'Teacher\ForgotPasswordController@sendResetLinkEmail')->name('teacher.password.email');
Route::get('teacher-password/reset', 'Teacher\ForgotPasswordController@showLinkRequestForm')->name('teacher.password.request');
Route::post('teacher-password/reset', 'Teacher\ResetPasswordController@reset')->name('teacher.password.update');
Route::get('teacher-password/reset/{token}', 'Teacher\ResetPasswordController@showResetForm')->name('teacher.password.reset');
