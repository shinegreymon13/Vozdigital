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

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('home', 'Home\HomeController@index')->name('home');
Route::get('admin', 'Admin\AdminController@index')->name('admin');
Route::get('supervisor', 'Supervisor\SupervisorController@index')->name('supervisor');
