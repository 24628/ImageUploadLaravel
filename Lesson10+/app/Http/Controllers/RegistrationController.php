<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class RegistrationController extends Controller
{
    public function create()

    {

        return view('registration.create');

    }

    public function store()

    {
        //Validate the form

        $this->validate(request(),[

            'name' => 'required',

            'email' => 'required|email',

            'password' => 'required|confirmed'

        ]);

        //Create the user

//        $user = User::create(request(['name', 'email', 'password']));

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        //Sign in the user

        auth()->login($user);

        // Redirect to the homepage

        return redirect()->home();
    }
}
