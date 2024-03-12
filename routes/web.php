<?php

use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/chi-sono', function () {
    $title = 'Chi Sono';
    $description = 'Questa è la mia pagina di presentazione';
    
    return view('chi-sono', compact('title', 'description'));
});
