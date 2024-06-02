<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('main');

Route::get('/voting', function () {
    return view('voting');
})->name('voting');
