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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('area','AreaController');
Route::resource('processe','ProcessesController');

Route::get('/jobtitle/{area}/create','JobtitleController@create')
    ->name('jobtitle.create');
Route::resource('jobtitle','JobtitleController')    ->except('create');




Route::get('/subprocesse/{processe}/create','SubprocesseController@create')
->name('subprocesse.create');
Route::resource('subprocesse','SubprocesseController')    ->except('create');

Route::post('/getjob','ProcessesController@getjob')    ->name('processe.getjob');


Route::resource('jobtitlesubprocesse','Jobtitle_subprocesseController');


