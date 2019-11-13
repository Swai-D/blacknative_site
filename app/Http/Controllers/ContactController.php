<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(){

        $contact = request() -> validate([
            'name'=> 'required',
            'email'=> 'required',
            'message'=> 'required',
        ]);
     $contact= new Customer($contact);
        Mail::to('native@test.com')->send(new ContactFormMail($contact));

        return redirect('/');
    }
}
