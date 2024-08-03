<?php

namespace App\Http\Controllers;


use App\Models\Equipe;

use App\Models\Classement;

use App\Models\Infos;
use App\Models\Tournoi;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function viewusers(){
        $users= User::all();
        return view('admin.viewusers',compact('users'));
    }
   
   
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'usertype' => 'required|string|in:admin,manager,user',
        ]);

        // Création d'un nouvel utilisateur
        $user = new User();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->usertype = $request->usertype;
        $user->save();

        return redirect()->route('admin.viewusers')->with('success', 'Utilisateur ajouté avec succès.');
    }

    // CRUD tournoi
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


        public function deleteTournament($id)
    {
        $tournoi = Tournoi::findOrFail($id);
        $tournoi->delete();

        return redirect()->route('admin.viewTournois')->with('success', 'Tournoi supprimé avec succès.');
    }





    // CRUD infos
    public function viewInfos(){
        $infos = Infos::all();
        return view('admin.viewInfos', compact('infos'));
    }

    public function storeInfo(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'commentaire' => 'required|string|max:750',
        ]);

        // Création de la nouvelle info
        $info = new Infos();
        $info->titre = $request->titre;
        $info->image = $request->image;
        $info->commentaire = $request->commentaire;
        $info->save();

        return redirect()->route('admin.viewInfos')->with('success', 'Informations ajoutées avec succès.');
    }

    public function updateInfo(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'id' => 'required|integer|exists:infos,id',
            'titre' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'commentaire' => 'required|string|max:1000',
        ]);

        // Trouver l'info par ID et mettre à jour
        $info = Infos::find($request->id);
        $info->titre = $request->input('titre');
        $info->image = $request->input('image');
        $info->commentaire = $request->input('commentaire');
        $info->save();

        // Rediriger avec un message de succès
        return redirect()->route('admin.viewInfos')->with('success', 'Information mise à jour avec succès.');
    }

    public function deleteInfo(Request $request)
    {
        $info = Infos::find($request->id);
        $info->delete();

        return redirect()->route('admin.viewInfos')->with('success', 'Information supprimée avec succès.');
    }


    public function tournois()
    {
        $tournois = Tournoi::all();
        return view('admin.viewTournois', compact('tournois'));
    }


    //la fonction pour faire le crud des equipes
    // Dans AdminController.php
// Dans AdminController.php
// Dans AdminController.php
public function manageMembers()
{
    $equipes = Equipe::all(); // Récupère toutes les équipes de la base de données
    return view('equipes.manageMembers', compact('equipes')); // Passe la variable à la vue
}




    
    



    // CRUD classements
    public function viewClassements(){
        $classements = Classement::all();
        return view('admin.viewClassements', compact('classements'));
    }

    public function storeClassement(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'equipe' => 'required|string|max:255',
            'victoires' => 'required|integer|max:10',
            'defaites' => 'required|integer|max:10',
            'points' => 'required|integer|max:10',
        ]);

        // Création de la nouvelle info
        $classement = new Classement();
        $classement->equipe = $request->equipe;
        $classement->victoires = $request->victoires;
        $classement->defaites = $request->defaites;
        $classement->points = $request->input('points');
        $classement->save();

        return redirect()->route('admin.viewClassements')->with('success', 'Informations ajoutées avec succès.');
    }

    public function updateClassement(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'id' => 'required|integer|exists:classements,id',
            'equipe' => 'required|string|max:255',
            'victoires' => 'required|integer|max:10',
            'defaites' => 'required|integer|max:10',
            'points' => 'required|integer|max:10',
        ]);

        // Trouver l'info par ID et mettre à jour
        $classement = Classement::find($request->id);
        $classement->equipe = $request->input('equipe');
        $classement->victoires = $request->input('victoires');
        $classement->defaites = $request->input('defaites');
        $classement->points = $request->input('points');
        $classement->save();

        // Rediriger avec un message de succès
        return redirect()->route('admin.viewClassements')->with('success', 'Information mise à jour avec succès.');
    }

    public function deleteClassement(Request $request)
    {
        $classement= Classement::find($request->id);
        $classement->delete();

        return redirect()->route('admin.viewClassements')->with('success', 'Information supprimée avec succès.');
    }

}
