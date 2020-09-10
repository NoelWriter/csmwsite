<?php

use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/osu', function () {
    return view('osu');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::resource('commands', 'CommandController');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
