<?php

namespace App\Http\Controllers;

use App\Models\RequestFormData;
use Illuminate\Http\Request;

class RequestFormController extends Controller
{
    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'gdpr_rules' => 'accepted',
        ]);

        // Save the form data to the database
        $formData = RequestFormData::create($validatedData);

        // Optionally, you can return a response or redirect the user
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
