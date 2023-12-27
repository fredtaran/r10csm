<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    // Login view
    public function login_view() {
        return view('login');
    }

    // Login process
    public function login_process(Request $request) {
        // Get credentials from the request payload
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        // Authenticated credentials
        if(Auth::attempt($credentials, true)) {
            // Generate a session
            $request->session->generate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.'
        ]);
    }
}
