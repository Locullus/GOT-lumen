<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use App\Models\Character;

class CharacterController extends Controller
{
    /**
     * /characters/{id}
     * GET
     */
    public function item($id)
    {
        $character = Character::find($id);

        // on vérifie si le personnage existe dans la BDD
        if (!empty($character))
        {
            // on récupère certaines propriétés de l'objets
            $title = $character->title;
            $mother = $character->mother;
            $father = $character->father;
            $houses = $character->houses;

            // on utilise la méthode compact() pour générer un tableau associatif où clés et valeurs ont le même nom (c'est l'inverse de la méthode extract())
            return view('character', compact('character', 'title', 'mother', 'father', 'houses'));
        }
        else
        {
            return view('errors.404', ['messageCharacter' => "Désolé, ce personnage n'existe pas"]);
        }
    }
}
