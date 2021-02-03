<?php

namespace App\Http\Controllers;

class AccueilController extends Controller
{
    public function index()
    {
        return view('accueil_commercial');
    }

    public function indexBE()
    {
        return view('accueil-BE');
    }
}
