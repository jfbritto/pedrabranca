<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SiteController@index')->name('site');
