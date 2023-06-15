<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required' , 
            'email' => 'required',
            'password' => ['required', 'min:8', 'max:25']
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user_in_use =  User::create($incomingFields);

        Auth()->login($user_in_use);
        return redirect()->route('Home');
    }

    public function login()
    {
        return redirect()->route('Home');
    }

    public function logout()
    {
        Auth()->logout();
        return redirect()->route('Login');
    }
}
