<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\User;
use App\Models\admin;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');

    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return redirect('/admin');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('login'); // Redirect to the desired page after logout
    }
}
