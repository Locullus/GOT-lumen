<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use App\Models\Character;

class MainController extends Controller
{
    /**
     * /
     * GET
     */
    public function list()
    {
        // récupère tous les personnages
        $characters = Character::all();

        // renvoie de la liste à la vue
        return view('homepage', ['characters' => $characters]);
    }
}
