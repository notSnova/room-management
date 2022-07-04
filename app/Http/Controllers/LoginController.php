<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class LoginController extends Controller
{
    // Login
    function login()
    {
        return view('login');
    }

    // Check Login
    function login_check(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Login::where(['username' => $request->username, 'password' => sha1($request->password)])->count();
        if ($admin > 0) {
            $adminData = Login::where(['username' => $request->username, 'password' => sha1($request->password)])->get();
            session(['adminData' => $adminData]);
            return redirect('admin');
        } else {
            return redirect('login')->with('failed', 'Invalid Username or Password.');
        }
    }

    // Logout
    function logout()
    {
        session()->forget(['adminData']);
        return redirect('login');
    }
}
