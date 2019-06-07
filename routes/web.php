<?php

Route::get('/', 'HomeContrller@index');
Route::get('/books', 'BooksController@index');
Route::post('/books', 'BooksController@store');
Route::patch('/books/{book}', 'BooksController@update');