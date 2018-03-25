<?php

/**
 * Misc. pages
 */
Route::get('/', 'PageController@welcome');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');

/**
 * Bill Splitter
 */
Route::get('/bills', 'BillController@index');
Route::get('/bills/{total}', 'BillController@show');

