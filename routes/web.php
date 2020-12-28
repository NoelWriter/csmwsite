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

Route::get('/f1', function () {
    return view('f1');
});

Route::get('/osu', function () {
    return view('osu');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/mapbox', function () {
    return view('map');
});

Route::get('/tarkov-ammo', function () {
    return view('tarkov-ammo');
});


Route::group(['middleware' => 'guest'], function() {

    Route::get('/login', 'LoginController@discord');

    Route::get('/login/redirect', 'LoginController@discordRedirect');

});

Route::group(['middleware' => 'auth'], function() {

    Route::get('/logout', 'LoginController@logout')->name('logout');

});

Route::resource('commands', 'CommandController');

Route::get('/home', 'HomeController@index')->name('home');
