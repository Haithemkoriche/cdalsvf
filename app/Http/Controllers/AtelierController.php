<?php

// AtelierController
namespace App\Http\Controllers;

use App\Models\Atelier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AtelierController extends Controller
{
    public function ajouter(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'atelier_title' => 'required',
            'atelier_description' => 'required',
            'atelier_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Enregistrer l'image dans un dossier
        $imagePath = $request->file('atelier_image')->store('public/images');

        // Créer un nouvel atelier
        $atelier = new Atelier();
        $atelier->title = $request->input('atelier_title');
        $atelier->description = $request->input('atelier_description');
        $atelier->image = $imagePath;
        $atelier->save();

        // Rediriger vers une page ou afficher un message de succès
        return redirect()->back()->with('success', 'Atelier ajouté avec succès.');
    }
}
