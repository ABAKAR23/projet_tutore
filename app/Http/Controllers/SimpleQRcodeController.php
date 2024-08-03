<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

# 1. La facade QrCode
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SimpleQRcodeController extends Controller
{
    // L'action "generate" de la route "simple-qrcode" (GET)
    public function generate () {

        // Génération d'un code secret de 5 chiffres aléatoires
        $secret = str_pad(random_int(0, 99999), 5, '0', STR_PAD_LEFT);

        // On génère un QR code de taille 200 x 200 px avec le code secret
        $qrcode = QrCode::size(200)->generate("Voici votre code secret: $secret. Conservez-le prudemment.");

        // On envoie le QR code généré à la vue "simple-qrcode"
        return view("simple-qrcode", compact('qrcode'));
    }
}
