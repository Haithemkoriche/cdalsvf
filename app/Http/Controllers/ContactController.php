<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function store()
    {
        $contact = new contact();
        $contact->name = request()->contact_name;
        $contact->email = request()->contact_email;
        $contact->phone = request()->contact_phone;
        $contact->message = request()->contact_message;
        $contact->save();
        return back()->with('success', 'Form submitted successfully!');
    }
}
