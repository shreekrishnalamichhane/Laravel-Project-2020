<?php

use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\Subject;

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

Route::resource('notes','NoteController');
Route::get('/getSubjects/{id}','NoteController@getSubjects')->name('getSubjects');


Route::get('/profile', function () {
    return view('pages.profile');
});

Route::resource('semester','SemesterController');
Route::resource('subject','SubjectController');

