<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('razpis');
})->name('home');
Route::view('/pravila', 'pravila')->name('pravila');
Route::view('/rezultati', 'rezultati')->name('rezultati');
Route::view('/galerija', 'galerija')->name('galerija');

