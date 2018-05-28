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
Route::get('/home_user', 'User@index');
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');
Route::get('/show','User@show');
Route::post('/delete','User@destroy');

Route::get('/dashboard', 'Sampah@dashboard');


Route::resource('sampah','Sampah');

Route::get('/', function () {
    return view('login');
});
Route::get('/data_sampah',function () {
	# code...
	return view('data_sampah');
});