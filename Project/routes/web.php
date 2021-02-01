<?php

use Illuminate\Support\Facades\Route;

Route::get('/','PeripheralController@index') -> name('peripherals');
Route::get('/peripheral/{id}','PeripheralController@show') -> name('peripheral');
Route::get('/new/peripheral','PeripheralController@create') -> name('peripheral-create');
Route::post('/new/peripheral/store','PeripheralController@store') -> name('peripheral-store');