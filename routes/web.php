<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('service', 'service');
Route::view('review', 'review');
Route::view('account', 'account');