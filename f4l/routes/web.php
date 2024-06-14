<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarInsuranceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MedicalInsuranceController;
use App\Http\Controllers\PetInsuranceController;

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('/about/index', [AboutController::class, 'show'])->name('about.index');
Route::get('/car-insurance/index', [CarInsuranceController::class, 'show'])->name('car-insurance.index');
Route::get('/contact/index', [ContactController::class, 'show'])->name('contact.index');
Route::get('/medical-insurance/index', [MedicalInsuranceController::class, 'show'])->name('medical-insurance.index');
Route::get('/product-pet-insurance/index', [PetInsuranceController::class, 'show'])->name('product-pet-insurance.index');