<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('registrar', [UserController::class, 'index'])->name('registrar');
Route::post('registrar', [UserController::class, 'cadastra'])->name('registrar');
