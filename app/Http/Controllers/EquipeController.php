<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function index()
    {
        $equipes = Equipe::all();
        return view('admin.viewEquipes', compact('equipes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        Equipe::create($request->all());
        return redirect()->route('admin.viewEquipes')->with('success', 'Équipe créée avec succès.');
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $equipe = Equipe::findOrFail($id);
        $equipe->update($request->all());
        return redirect()->route('admin.viewEquipes')->with('success', 'Équipe mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $equipe = Equipe::findOrFail($id);
        $equipe->delete();
        return redirect()->route('admin.viewEquipes')->with('success', 'Équipe supprimée avec succès.');
    }

    public function manageMembers($id)
{
    $equipe = Equipe::findOrFail($id);
    $membres = $equipe->membres; // Assurez-vous que 'membres' est bien défini

    // Vérifiez si $membres est nul et initialisez-le si nécessaire
    if (is_null($membres)) {
        $membres = collect(); // Ou $membres = []; pour un tableau vide
    }

    return view('equipes.manageMembers', compact('equipe', 'membres'));
}

public function storeMember(Request $request)
    {
        // Valider les données
        $request->validate([
            'equipe_id' => 'required|exists:equipes,id',
            'nom' => 'required|string|max:255',
            // Ajoutez d'autres validations selon vos besoins
        ]);

        // Créer un nouveau membre
        $membre = new Membre();
        $membre->equipe_id = $request->input('equipe_id');
        $membre->nom = $request->input('nom');
        // Assignez d'autres champs si nécessaire
        $membre->save();

        // Rediriger ou renvoyer une réponse
        return redirect()->back()->with('success', 'Membre ajouté avec succès.');
    }


}
