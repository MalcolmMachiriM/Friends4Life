<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Mail\NewsletterFormSubmitted;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletters,email',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        Newsletter::create([
            'email' => $request->email,
        ]);

        // Send email
        Mail::to('eddymnemo45@gmail.com')->send(new NewsletterFormSubmitted($request->all()));

        return response()->json(['success' => true, 'message' => 'Thank you for subscribing!']);
    }
}
