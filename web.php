<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    $services = [
        'Web Development',
        'Graphic Design',
        'Digital Marketing',
        'SEO Optimization',
    ];

    return view('contact', ['services' => $services]);
});