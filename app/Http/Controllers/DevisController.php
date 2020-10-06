<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function index_etape1()
    {
        return view('Devis/Creation_definition_projet');
    }
}
