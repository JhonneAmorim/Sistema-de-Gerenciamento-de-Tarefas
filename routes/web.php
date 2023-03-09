<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('index');
});

Route::get('registrar', [UserController::class, 'index'])->name('registrar');
Route::post('registrar', [UserController::class, 'cadastrar'])->name('registrar');
Route::get('login', [UserController::class, 'telaLogin'])->name('login');
Route::post('login', [UserController::class, 'login'])->name('login');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
