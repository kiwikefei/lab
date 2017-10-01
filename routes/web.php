<?php
Route::post('notes', 'NoteController@store');
Route::get('notes/create', 'NoteController@create');