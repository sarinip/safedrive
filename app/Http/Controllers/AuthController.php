<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        //
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();

        if(is_null($user)){
            return redirect()->back()->with('auth_error_message', "Email not found!!");
        }

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            $request->session()->push('user', $user);

            return redirect()->route("dashboard");

        }

        return redirect()->back()->with('auth_error_message','Authentication failed !');

    }

}
