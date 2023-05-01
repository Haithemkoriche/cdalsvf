<?php

// EvenementController
namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function index(){
        return view('admin.add_event');
    }
    public function ajouter(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'evenement_title' => 'required',
            'evenement_description' => 'required',
            'evenement_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Enregistrer l'image dans un dossier
        $imagePath = $request->file('evenement_image')->store('public/images');

        // Créer un nouvel événement
        $evenement = new Evenement();
        $evenement->title = $request->input('evenement_title');
        $evenement->description = $request->input('evenement_description');
        $evenement->image = $imagePath;
        $evenement->save();

        // Rediriger vers une page ou afficher un message de succès
        return redirect()->back()->with('success', 'Événement ajouté avec succès.');
    }
}
