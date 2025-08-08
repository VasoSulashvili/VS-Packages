<?php

use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    dd(config('auth'));
});

Route::get('/', function () {
    return view('welcome');
});
