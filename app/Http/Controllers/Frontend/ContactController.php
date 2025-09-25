<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string'
        ]);

        try {
            Mail::to(config('mail.from.address'))->send(new ContactFormMail($validated));
            Alert::sucecss('success', 'Your message has been sent successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            Log::error($e);
            Alert::error('error', 'Failed to send message. Please try again later.');
            return redirect()->back()->with('error', 'Failed to send message. Please try again later.');
        }
    }
}
