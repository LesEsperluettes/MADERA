<?php

namespace App\Http\Controllers;

class ModuleController extends Controller
{
    public function module_etape1()
    {
        return view('Module/Creation_definition_module');
    }

    public function module_etape2()
    {
        return view('Module/Creation_coupeprincipe_module');
    }

    public function module_etape3()
    {
        return view('Module/Creation_composant_module');
    }

    public function module_etape4()
    {
        return view('Module/Creation_parametres_module');
    }

    public function module_etape5()
    {
        return view('Module/Creation_resume_module');
    }


}
