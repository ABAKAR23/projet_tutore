<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function index()
    {
        return view('chatbot');
    }

    public function respond(Request $request)
    {
        $userMessage = $request->input('message');
        $botResponse = $this->generateResponse($userMessage);

        return response()->json(['response' => $botResponse]);
    }

    private function generateResponse($message)
    {
        // Logique simple pour le chatbot

        $message = strtolower($message);
        if (strpos($message, 'nom du tournoi') !== false) {
            return 'Le tournoi est appelé "CAN ESMT 2024".';
        } elseif (strpos($message, 'équipes participent') !== false || strpos($message, 'liste des équipes') !== false) {
            return 'Les équipes participantes sont les INGC2, les LTI2, les LIPMEN2, et les LTI3.';
        } elseif (strpos($message, 'heure est le prochain match') !== false) {
            return 'Le prochain match est à 18h00.';
        } elseif (strpos($message, 'résultats des derniers matchs') !== false) {
            return 'Les LTI3 ont battu les LTI2 3-2, et les INGC2 ont fait match nul 1-1 avec les LIPMEN2.';
        } elseif (strpos($message, 'classement actuel') !== false) {
            return 'Les INGC2 sont en tête du classement, suivis par les LIPMEN2, les LTI3, et les LTI2.';
        }
        else {
            return 'Désolé, je ne comprends pas encore cette question.';
        }
    }


}
