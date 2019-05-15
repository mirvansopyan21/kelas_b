<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt(['npm' => $request->npm, 'password' => $request->password, 'status' => 1])) {
            return redirect()->intended('home');
        }

        return back()->withInput($request->only('npm'));
    }
}
