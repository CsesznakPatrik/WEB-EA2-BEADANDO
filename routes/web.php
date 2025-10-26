<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('kapcsolat-kuldes', [ContactController::class, 'store'])->name('contact.store');
