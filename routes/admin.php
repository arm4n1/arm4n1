<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'gitHomeController@index')->name('dashboard');
