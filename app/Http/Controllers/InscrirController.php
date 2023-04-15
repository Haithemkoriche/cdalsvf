<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class InscrirController extends Controller
{
    public function create()
    {
        return view('inscrir');
    }
    public function store()
    {
        $nom = request()->nom;
        $prenom = request()->prenom;
        $email = request()->email;
        $numero = request()->numero;
        $lieu_naissance = request()->lieu_naissance;
        $date_naissance = request()->date_naissance;
        $addres = request()->addres;
        $student = Student::create([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'telephone' => $numero,
            'lieu_naissance' => $lieu_naissance,
            'date_naissance' => $date_naissance,
            'addres' => $addres
        ]);
        return redirect('/');
    }
    
}
