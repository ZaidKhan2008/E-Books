<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'case_type' => 'nullable|string|max:100',
            'budget_range' => 'nullable|string|max:50',
            'is_urgent' => 'boolean',
        ]);

        $contactMessage = ContactMessage::create($validated);

        // Send email notification to admin
        try {
            // Mail::to(config('mail.admin_email'))->send(new ContactMessageReceived($contactMessage));
        } catch (\Exception $e) {
            // Log error but don't fail the request
            logger('Failed to send contact email: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
