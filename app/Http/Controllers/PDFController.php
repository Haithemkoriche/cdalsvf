<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        // Récupérer les données du formulaire
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
        $data = [
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'telephone' => $numero,
            'lieu_naissance' => $lieu_naissance,
            'date_naissance' => $date_naissance,
            'addres' => $addres
        ];

        // Récupérer la vue Blade et convertir en PDF
        $pdf = PDF::loadView('pdf/pdf', ['data' => $data]);

        // Générer le PDF et le renvoyer en réponse
        return $pdf->download('inscription.pdf');
        return redirect('/index');
    }
}
