<?php
namespace App\Http\Controllers;

use App\Models\Classement;
use App\Models\Infos;
use App\Models\Matchs;
use App\Models\Tournoi;
use App\Models\User;
use Illuminate\Http\Request;

class SpectateurController extends Controller
{
    public function viewIndex()
    {
        return view('home.index');
    }

    public function viewTournois()
    {
        $tournois = Tournoi::all();
        return view('home.viewSpecTournois', compact('tournois'));
    }

    public function viewActualite()
    {
        $infos = Infos::all();
        return view('home.viewSpecActualite', compact('infos'));
    }

    public function viewContact()
    {
        return view('home.viewSpecContact');
    }

    public function viewClassement()
    {
        // Récupérer les classements triés par points en ordre décroissant
        $classements = Classement::orderBy('points', 'desc')->get();

        // Passer les données à la vue
        return view('home.viewSpecClassement', ['classements' => $classements]);
    }
}
?>