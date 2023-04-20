<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\carousel;

class IndexController extends Controller
{
    public function index()
    {
        $carousel = carousel::all();
        $activities = Activity::all();
        return view('index', ['activities' => $activities, 'slides' => $carousel]);
    }
}
