<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class AccueilController extends Controller
{
    public function index()
    {
        $admin_role = Role::find(1);
        $be_role = Role::find(2);
        $co_role = Role::find(3);

        if(Auth::user()->hasRole($be_role)){
            return redirect()->route('home.be');
        }elseif (Auth::user()->hasRole($co_role)){
            return redirect()->route('home.co');
        }

        return view('/');
    }

    public function indexCO(){
        return view('accueil_commercial');
    }

    public function indexBE()
    {
        return view('accueil-BE');
    }
}
