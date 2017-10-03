<?php
Route::post('notes', 'NoteController@store');
Route::get('notes', 'NoteController@index');
Route::get('notes/create', 'NoteController@create');
Route::get('tests', 'TestController@index');