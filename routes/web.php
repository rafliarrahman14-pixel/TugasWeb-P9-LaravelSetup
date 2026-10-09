<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    $products = [
        'Laptop',
        'Keyboard',
        'Mouse',
        'Monitor'
    ];

    return view('products', compact('products'));
});

Route::get('/', function () {
    $name = 'Rafli';

    $courses = [
        'HTML',
        'CSS',
        'Laravel'
    ];

    return view('welcome', compact('name', 'courses'));
});