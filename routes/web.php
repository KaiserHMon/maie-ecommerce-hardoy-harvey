<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/terminos-de-uso', function () {
    return view('terminos-de-uso');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/comercializacion', function () {
    return view('comercializacion');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});

Route::get('/quienes-somos', function() {
    return view('quienes-somos');
});