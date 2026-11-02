<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return view('main/hello');
});

Route::get('/about', function () {
    return view('main/about');
});

Route::get('/contact', function () {
    $contact = [
        'name' => 'Политех',
        'adres' => 'Большая Семеновская',
        'phone' => '8 (495) 423-2333',
        'email' => '@mospolytech.ru'
    ];
    return view('main/contact', ['contact' => $contact]);
});
