<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $activities = Activity::all();
        return view('index', ['activities' => $activities]);
    }
}
