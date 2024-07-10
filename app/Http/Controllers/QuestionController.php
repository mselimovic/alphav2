<?php

namespace App\Http\Controllers;

use App\Mail\AdminFormNotification;
use App\Mail\UserFormSubmitted;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
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
        
        $formData = new Question([
            'full_name' => $validatedData['full_name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
            'gdpr_rules' => $request->has('gdpr_rules'),
        ]);
        $formData->save();
        $formDataArray = $formData->toArray();
        $locale = app()->getLocale();
        Session::flash('form_submitted_successfully', true);
    
        Mail::to($formData['email'])->send(new UserFormSubmitted($formDataArray, $locale));
        
        Mail::to('mehmed.selimovic.ets@gmail.com')->send(new AdminFormNotification($formDataArray, $locale));
    
        return redirect()->route('pages.thankYou');
    }
}
