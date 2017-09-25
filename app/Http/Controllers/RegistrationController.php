<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {

        # Create user
        $user = User::create([
        	'name' => request('name'),
        	'email' => request('email'),
        	'password' => bcrypt(request('password'))
        ]);
        #sign in
        auth()->login($user);

        \Mail::to($user)->send(new Mail\Welcome($user));

        # Redirect
        return redirect()->home();
    }
}
