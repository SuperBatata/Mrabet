<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChargeurController extends Controller
{
    public function addChargeur ()
    {
         return view('Chargeur.addChargeur');

    }

}
