<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarInsuranceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MedicalInsuranceController;
use App\Http\Controllers\PetInsuranceController;
use App\Http\Controllers\GetQuoteFormController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\BusinessIndemnityController;
use App\Http\Controllers\CarWarrantyController;
use App\Http\Controllers\CommercialInsuranceController;
use App\Http\Controllers\HealthInsuranceController;
use App\Http\Controllers\LifeInsuranceController;
use App\Http\Controllers\VehicleTrackerController;

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('/about/index', [AboutController::class, 'show'])->name('about.index');
Route::get('/car-insurance/index', [CarInsuranceController::class, 'show'])->name('car-insurance.index');
Route::get('/contact/index', [ContactController::class, 'show'])->name('contact.index');
Route::get('/medical-insurance/index', [MedicalInsuranceController::class, 'show'])->name('medical-insurance.index');
Route::get('/product-pet-insurance/index', [PetInsuranceController::class, 'show'])->name('product-pet-insurance.index');
Route::get('/business-indemnity-insurance/index', [BusinessIndemnityController::class, 'show'])->name('business-indemnity-insurance.index');
Route::get('/car-warranty/index', [CarWarrantyController::class, 'show'])->name('car-warranty.index');
Route::get('/commercial-insurance/index', [CommercialInsuranceController::class, 'show'])->name('commercial-insurance.index');
Route::get('/health-insurance/index', [HealthInsuranceController::class, 'show'])->name('health-insurance.index');
Route::get('/life-insurance/index', [LifeInsuranceController::class, 'show'])->name('life-insurance.index');
Route::get('/vehicle-tracker/index', [VehicleTrackerController::class, 'show'])->name('vehicle-tracker.index');

// Route::get('/get-quote-form', [GetQuoteFormController::class, 'show'])->name('get-quote.form');
// Route::post('/get-quote', [GetQuoteFormController::class, 'store'])->name('get-quote.store');

// use App\Http\Controllers\GetQuoteFormController;

Route::get('/get-quote', [GetQuoteFormController::class, 'show'])->name('get-quote.show');
Route::post('/get-quote', [GetQuoteFormController::class, 'store'])->name('get-quote.store');
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
