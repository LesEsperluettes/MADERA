<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function index_etape1()
    {
        return view('Devis/Creation_definition_projet');
    }

    public function index_etape2()
    {
        return view('Devis/Creation_choix_produit');
    }

    public function index_etape3()
    {
        return view('Devis/Creation_personnalisation');
    }

    public function index_etape4()
    {
        return view('Devis/Creation_resume');
    }
    
    public function index_etape_finale()
    {
        return view('Devis/Creation_termine');
    }
}
