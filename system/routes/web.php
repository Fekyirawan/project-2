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

Route::get('/Home', function(){
	return view('Home');
});

Route::get('/akustik', function(){
	return view('akustik');
});

Route::get('/bass', function(){
	return view('bass');
});

Route::get('/drum', function(){
	return view('drum');
});

Route::get('/piano', function(){
	return view('piano');
});

Route::get('/sign', function(){
	return view('sign');
});

