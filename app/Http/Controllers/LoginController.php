<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\User;
use App\Models\admin;
use App\Models\User;
use App\Models\Activity;
use App\Models\Student;
use App\Models\carousel;
use App\Models\Atelier;
use App\Models\Evenement;

class LoginController extends Controller
{
    public function index()
    {
        $membersCount = student::count();
        // $employeeCount = Employee::count();
        $activitiesCount = Activity::count();
        $ateliersCount = Atelier::count();
        $evenementsCount = Evenement::count();
        $carouselItems = Carousel::all();

        return view('admin.dashboard', compact('membersCount', 'activitiesCount', 'carouselItems','ateliersCount','evenementsCount'));
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
