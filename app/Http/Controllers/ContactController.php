<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store()
    {
        $contact = new contact();
        $contact->set('name', Request::getValue('contact-name'));
        $contact->set('email', Request::getValue('contact-email'));
        $contact->set('phone', Request::getValue('contact-phone'));
        $contact->set('message', Request::getValue('contact-message'));
        $contact->save();
        return ('message evoyer avec succes');
    }
}
