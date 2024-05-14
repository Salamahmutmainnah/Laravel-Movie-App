<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('product');
});
Route::get('/movies', function () {
    return view('movies.index');
});
Route::get('/genres', function () {
    return view('genre.index');
});
Route::get('/reviews', function () {
    return view('review.index');
});