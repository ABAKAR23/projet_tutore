<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paiement;

class PaiementController extends Controller
{
    public function index(){
        return view('card.card');
    }

    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'nature' => 'required|string',
            'montant' => 'required|integer',

        ]);

        // Création du paiement
        Paiement::create([
            'nature' => $request->nature,
            'montant' => $request->montant*2000,

        ]);

        // Redirection ou réponse après le paiement
        return redirect("simple-qrcode")->with('success', 'Paiement enregistré avec succès.');
    }
}
