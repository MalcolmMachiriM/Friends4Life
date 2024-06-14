<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use App\Mail\MotorInsuranceFormSubmitted;
// use App\Models\CarInsurance; 

class PetInsuranceController extends Controller
{
    public function show()
    {
        return view('product-pet-insurance.index');
    }

}