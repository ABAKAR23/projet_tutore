<?php

namespace App\Http\Controllers;

use App\Models\Tournoi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewTournois()
    {
        $tournois = Tournoi::all();
        return view('admin.viewTournois', compact('tournois'));
    }

    public function storeTournament(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'dateDebut' => 'required|date',
            'dateFin' => 'required|date',
            'statut' => 'required|string|max:255',
        ]);

        // Création d'un nouveau tournoi
        $tournoi = new Tournoi();
        $tournoi->nom = $request->nom;
        $tournoi->type = $request->type;
        $tournoi->dateDebut = $request->dateDebut;
        $tournoi->dateFin = $request->dateFin;
        $tournoi->statut = $request->statut;
        $tournoi->save();

        return redirect()->route('admin.viewTournois')->with('success', 'Tournoi ajouté avec succès.');
    }

    public function updateTournament(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'id' => 'required|integer|exists:tournois,id',
            'nom' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'dateDebut' => 'required|date',
            'dateFin' => 'required|date',
            'statut' => 'required|string|max:255',
        ]);

        // Mise à jour du tournoi
        $tournoi = Tournoi::find($request->id);
        $tournoi->nom = $request->nom;
        $tournoi->type = $request->type;
        $tournoi->dateDebut = $request->dateDebut;
        $tournoi->dateFin = $request->dateFin;
        $tournoi->statut = $request->statut;
        $tournoi->save();

        return redirect()->route('admin.viewTournois')->with('success', 'Tournoi mis à jour avec succès.');
    }

    public function deleteTournament(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'id' => 'required|integer|exists:tournois,id',
        ]);

        // Suppression du tournoi
        $tournoi = Tournoi::find($request->id);
        $tournoi->delete();

        return redirect()->route('admin.viewTournois')->with('success', 'Tournoi supprimé avec succès.');
    }
}
