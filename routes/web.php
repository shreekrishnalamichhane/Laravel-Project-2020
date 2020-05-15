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
    return view('index');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('home');

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/notes','NoteController@index');
Route::get('/notes/create','Notecontroller@create');
Route::get('/notes/{id}/edit','Notecontroller@edit');
