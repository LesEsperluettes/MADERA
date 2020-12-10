<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilCommercialController extends Controller
{
    public function index()
    {
        return view('accueil_commercial');
    }
}
