<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $contact = new contact();
        $contact->name = $request->contact-name;
        $contact->email = $request->contact-email;
        $contact->phone = $request->contact-phone;
        $contact->message = $request->contact-message;
        $contact->save();
        return ('message evoyer avec succes');
    }
}
