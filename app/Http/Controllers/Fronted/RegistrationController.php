<?php

namespace App\Http\Controllers\Fronted;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('fronted.registration.index');
    }

    public function store(Request $request)
    {
        //validate the user
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'address' => 'required'
        ]);

        //save the date
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'address' => $request->address,
        ]);

        //sign the user in
        auth()->login($user);

        //redirect to
        return redirect('/user/profile');

    }

}
