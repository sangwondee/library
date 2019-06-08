<?php

Route::get('/', 'HomeContrller@index');

// Route Books
Route::get('/books', 'BooksController@index');
Route::post('/books', 'BooksController@store');
Route::patch('/books/{book}', 'BooksController@update');
Route::delete('/books/{book}', 'BooksController@destroy');

// Route Author
Route::post('/author', 'AuthorsController@store');