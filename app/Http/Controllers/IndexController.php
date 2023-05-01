<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\carousel;
use App\Models\Student;
use App\Models\Atelier;
use App\Models\Evenement;


class IndexController extends Controller
{
    public function index()
    {
        $ateliers = Atelier::all();
        $evenements = Evenement::all();
        $carousel = carousel::all();
        $activities = Activity::all();
        return view('index', ['activities' => $activities, 'slides' => $carousel,'ateliers'=>$ateliers,'evenements'=> $evenements,]);
    }
}
