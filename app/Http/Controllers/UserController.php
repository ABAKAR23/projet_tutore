<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Méthode pour afficher la liste des utilisateurs
    public function index()
    {
        $users = User::all();
        return view('admin.viewusers', compact('users'));
    }

    // Méthode pour ajouter un utilisateur
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'usertype' => 'required|string|in:admin,manager,user',
        ]);

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

    public function infos()
    {
        $users = User::all();
        return view('admin.viewusers', compact('users'));
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.viewusers')->with('success', 'Utilisateur supprimé avec succès.');
    }

    // Méthode pour afficher le formulaire d'édition d'un utilisateur
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    // Méthode pour mettre à jour les informations d'un utilisateur
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email|unique:users,email,'.$id,
            'usertype' => 'required|string|in:admin,manager,user',
        ]);

        $user = User::findOrFail($id);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->usertype = $request->usertype;

        if($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('admin.viewusers')->with('success', 'Utilisateur mis à jour avec succès.');
    }
}
