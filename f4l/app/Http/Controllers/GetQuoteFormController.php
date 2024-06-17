<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\GetQuoteFormSubmitted;
use App\Models\GetQuote;

class GetQuoteFormController extends Controller
{
    public function show()
    {
        return view('forms.quote');
    }

    public function store(Request $request)
    {
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
        // Mail::to('admin@f4l.co.za')->send(new GetQuoteFormSubmitted($request->all()));
        Mail::to('eddymnemo45@gmail.com')->send(new GetQuoteFormSubmitted($request->all()));


        // Redirect back with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
