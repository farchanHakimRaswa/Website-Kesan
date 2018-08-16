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
    return view('home');
});
Route::resource('rfids','RfidController');
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact_us', function () {
    return view('contact');
});
Route::get('/test', function () {
    return view('test');
});// for debugging
Route::post('/update','UpdateController@update');
Route::get('/main', function () {
    return view('tagRfid');
});


Route::get('/parse', function () {
    return view('parse');
});

