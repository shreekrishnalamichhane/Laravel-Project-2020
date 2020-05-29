<?php

use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\Subject;
use GuzzleHttp\Middleware;

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

Auth::routes(['verify'=>true]);

Route::get('/dashboard', 'DashboardController@index')->name('home')->middleware('verified');

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::resource('profile','ProfileController')->only('show')->middleware('verified');
Route::POST('/profile/{id}/change_avatar','ProfileController@change_avatar')->middleware('verified');
Route::resource('notes','NoteController')->middleware('verified');
Route::get('/notefilter/semester={semester1}&subject={subject1}','NoteController@notes_filter');
Route::get('/subjectfilter/semester={semester1}','SubjectController@subjects_filter');
Route::get('/getSubjects/{id}','NoteController@getSubjects')->name('getSubjects')->middleware('verified');


// Route::get('/profile', function () {
//     return view('pages.profile');
// });

Route::resource('semester','SemesterController')->except(['show'])->middleware('verified');
Route::resource('subject','SubjectController')->middleware('verified');



