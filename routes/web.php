<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', function () {
    return view('welcome'); // Asegúrate de que este archivo exista y sea el contenedor de tu aplicación Vue
})->where('any', '.*');
