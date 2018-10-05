<?php

Route::get('/', 'Admin\HomeController@index');
Route::post('/', 'Admin\HomeController@postIndex')->name('index');