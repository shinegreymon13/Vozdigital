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

Route::get('/', 'Auth\LoginController@showLoginForm')->middleware('guest');

Route::get('/login', function(){
    return view('auth.login');
});

Route::get('registrar', 'Auth\RegisterController@showRegistrationForm')->name('registrar');
Route::get('home', 'Home\HomeController@index')->name('home');
Route::get('admin', 'Admin\AdminController@index')->name('admin');
Route::get('supervisor', 'Supervisor\SupervisorController@index')->name('supervisor');

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('registrar', 'Auth\RegisterController@register');
