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
Route::get('/', function() {
	return redirect('login');
});
Route::get('/home', 'NoteController@index')->name('home');
Route::get('/note/delete/{id}', 'NoteController@delete')->name('note.delete');
Route::get('/note/edit/{id}', 'NoteController@edit')->name('note.edit');
Route::post('/note/update/{id}', 'NoteController@update')->name('note.update');

Route::get('/note/{id}', 'NoteController@getOneNote');

Route::get('/add', 'NoteController@add');
Route::post('/add', 'NoteController@saveNote');

Route::get('/register', function () {
    return redirect('login');
});
