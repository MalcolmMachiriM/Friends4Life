<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\GetQuoteFormSubmitted;
use App\Models\GetQuote;
use Exception;

class GetQuoteFormController extends Controller
{
    public function show()
    {
        return view('forms.quote');
    }

    public function store(Request $request)
    {
        try {
            // Validation Logic
            $request->validate([
                'full_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'selectedInsurance' => 'required|string',
                'limitbal' => 'required|numeric',
            ]);

            // Create a new GetQuote instance and fill it with form data
            $getQuote = new GetQuote();
            $getQuote->full_name = $request->input('full_name');
            $getQuote->email = $request->input('email');
            $getQuote->selectedInsurance = $request->input('selectedInsurance');
            $getQuote->limitbal = $request->input('limitbal');

            // Save the GetQuote instance to the database
            $getQuote->save();

            // Send email
            Mail::to('leads@friends4life.co.za')->send(new GetQuoteFormSubmitted($request->all()));

            // Return JSON response indicating success
            return response()->json(['success' => true, 'message' => 'Form submitted successfully!']);

        } catch (Exception $e) {
            // Return JSON response indicating error
            return response()->json(['success' => false, 'message' => 'An error occurred while submitting the form.'], 500);
        }
    }
}
