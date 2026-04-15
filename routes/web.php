<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre-mi', function () {
    return view('sobre-mi');
});

Route::get('/quienes-somos', function() {
    return view('quienes-somos');
});