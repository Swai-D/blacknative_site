<?php

namespace App\Http\Controllers;

use App\Customer;

class CustomerController extends Controller
{
    public  function store(){
        $input = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'message' => ['required', 'string', 'email', 'max:255'],
        ]);

        $data = new Customer();
        $data->name = request('name');
        $data->email =request('email');
        $data->message = request('message');
        $data->save();


        return redirect('/');
    }

}
