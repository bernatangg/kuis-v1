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
    return view('welcome');
});

Route::resource('pertanyaan','PertanyaanController');
Route::get('kuis', 'KuisController@showpertanyaan')->name('kuis.showpertanyaan');
Route::get('run_quiz/{id}', 'KuisController@runquiz')->name('kuis.runquiz');
Route::post('answer', 'KuisController@quizanswer')->name('kuis.check');
Route::post('search', 'KuisController@search')->name('kuis.search');


Route::get('/', function () {
    return view('index');
});

Route::get('/halaman-kedua', function () {
    return view('halamandua');
});
