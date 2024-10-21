<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user_landing');
});

Route::get('/login', function () {
    return view('user_login');
});

Route::get('/signup', function () {
    return view('user_signup');
});

Route::get('/forgotpassword', function () {
    return view('user_forgotPassword');
});
