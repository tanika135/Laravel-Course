<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('static.home');
})->name('home');

Route::get('/about', function () {
    return view('static.about');
})->name('about');

Route::get('/contact', function () {
    return view('static.contact');
})->name('contact');

Route::post('/contact', function () {
    dd(Request::all());
})->name('contact.post');
