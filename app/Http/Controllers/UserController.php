<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => ['required', 'min:8', 'max:25']
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        User::create($incomingFields);
        return redirect()->route('Home');
    }

    public function login()
    {
        return redirect()->route('Home');
    }
}
