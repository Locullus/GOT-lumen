<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use App\Models\House;

class HouseController extends Controller
{
    /**
     * /houses
     * GET
     */
    public function list()
    {
        // récupère tous les maisons
        $houses = House::all();

        // renvoie de la liste à la vue
        return view('houses', ['houses' => $houses]);
    }

    /**
     * /house/{id}
     * GET
     */
    public function item($id)
    {
        // récupère une maison à partir de son id
        $house = House::find($id);

        // on vérifie si la maison existe dans la BDD
        if (!empty($house))
        {
            return view('house', ['house' => $house]);
        } else
        {
            return view('errors.404', ['messageHouse' => "Il semblerait que cette maison n'existe pas"]);
        }
    }
}
