<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ActiviteController extends Controller
{
    public function index(){
        return view('admin.add_activité');
    }
    public function ajouter(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Enregistrer l'image dans un dossier
            $imagePath = $request->file('image')->store('public/images');

        // Créer une nouvelle activité
        $activite = new Activity();
        $activite->title = $request->input('title');
        $activite->description = $request->input('description');
        $activite->image = $imagePath;
        $activite->save();

        // Rediriger vers une page ou afficher un message de succès
        return redirect("/admin");
    }

}
