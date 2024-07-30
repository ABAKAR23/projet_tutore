<?php

namespace App\Http\Controllers;

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

    public function viewInfos(){
        return view('admin.viewInfos');
    }


}
