<?php
Route::post('notes', 'NoteController@store');
Route::get('notes', 'NoteController@index');
Route::get('notes/create', 'NoteController@create');
Route::get('tests', 'TestController@index');
class Test 
{
    public $name;
}
Route::get('', function(){
    $test = new Test;
    $test->name = 'Andy';
    $test1 = $test;
    $test2 = clone $test;
    $test1->name = 'Duck';
    $test2->name = 'Hello';
    dd($test,$test1,$test2);
});