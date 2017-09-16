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

Auth::routes();


Route::get('/', function () {
    return view('geopalmira.login');
});


Route::get('/geopalmira/login', function () {
    return view('geopalmira.login');
});

Route::get('/geopalmira', function () {
    return view('geopalmira.login');
});

Route::get('/geopalmira/register', function () {
    return view('geopalmira.register');
});

Route::get('/geopalmira/recover', function () {
    return view('geopalmira.recover');
});


Route::get('/geopalmira/contactform', 'SendMailsController@index')->name('contactform');
Route::get('/geopalmira/contactform/{option}', 'SendMailsController@indexOption')->name('contactform');
Route::post('/geopalmira/contactform', 'SendMailsController@sendMail')->name('contactform');

Route::post('/geopalmira/contactform_modal', 'SendMailsController@sendMailModal')->name('contactform_modal');



Route::get('/home', 'HomeController@index')->name('home');




Route::get('/about', function () {
    return view('welcome');
});




Route::get('/dashboard', 'DashBoardController@index')->name('dashboard');
Route::post('/dashboard', 'DashBoardController@index')->name('dashboard_post');
Route::get('/dashboard/{option}', 'DashBoardController@indexOption')->name('dashboard');




