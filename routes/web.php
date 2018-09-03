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
})->name('home');

Route::get('/Sbif', 'SbifController@index')->name('sbif.index');

Route::get('/Dte', 'DteController@index');

Route::get('/Dte/{id}', 'DteController@show');

//Route::get('/Mailer', 'MailerController@index');

// Email related routes
//Route::get('mail/send', 'MailerController@send');
Route::get('mail/send', 'HomeController@mail');

Route::get('tipo/{type}', 'SweetController@notification');

Route::get('pdf', 'PdfController@invoice');
