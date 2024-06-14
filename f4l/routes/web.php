<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarInsuranceController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});


Route::get('/about/index', [AboutController::class, 'show'])->name('about.index');
Route::get('/car-insurance/index', [CarInsuranceController::class, 'show'])->name('car-insurance.index');
Route::get('/contact/index', [ContactController::class, 'show'])->name('contact.index');