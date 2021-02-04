<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Gamme;
use App\Models\Modele;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function index_etape1(Request $request)
    {
        $parameters = [
            'clients' => Client::all()
        ];


        $goToNextStep = $request->input('goToNextStep');
        $selectedClient = $request->input('selectedClient');
        $nomProjet = $request->input('nomProjet');
        $refProjet = $request->input('refProjet');
        $dateProjet = $request->input('dateProjet');

        // Load session if exists
        $inputs = ['selectedClient', 'nomProjet', 'refProjet', 'dateProjet'];
        if($request->session()->has($inputs)){
            foreach($inputs as $i){
                $parameters[$i] = $request->session()->get($i);
            }
        }

        if(isset($goToNextStep)){
            // Validate request
            $request->validate([
                'selectedClient' => 'required',
                'nomProjet' => 'required',
                'refProjet' => 'required',
                'dateProjet' => 'required',
            ]);

            $client = Client::find($selectedClient);

            // redirect to next step
            $request->session()->put([
                'selectedClient' => $client,
                'nomProjet' => $nomProjet,
                'refProjet' => $refProjet,
                'dateProjet' => $dateProjet
            ]);
            return redirect()->route('devis_etape_2');
        }else{
            // Query selected client if provided
            if($selectedClient){
                $client = Client::find($selectedClient);
                if($client != null) $parameters['selectedClient'] = $client;
            }
        }

        return view('Devis/Creation_definition_projet',$parameters);
    }

    public function index_etape2(Request $request)
    {
        // Check for previous parameters, if not found redirect
        if(!session()->has([
            'selectedClient',
            'nomProjet',
            'refProjet',
            'dateProjet'
        ])) return redirect()->route('devis_etape_1');

        $parameters = [
            'gammes' => Gamme::all(),
        ];

        $goToNextStep = $request->input('goToNextStep');
        $gammeId = $request->input('gammeId');
        $modeleId = $request->input('modeleId');

        // Load session if exists
        $inputs = ['gamme', 'modele'];
        if($request->session()->has($inputs)){
            foreach($inputs as $i){
                $parameters[$i] = $request->session()->get($i);
            }
        }

        if($goToNextStep == "true") {
            $request->validate([
                'gammeId' => 'required',
                'modeleId' => 'required'
            ]);

            $gamme = Gamme::find($gammeId);
            $modele = Modele::find($modeleId);

            // redirect to next step
            $request->session()->put([
                'gamme' => $gamme,
                'modele' => $modele,
            ]);
            return redirect()->route('devis_etape_3');

        }else{
            // Load modeles if gamme is selected
            if(isset($parameters['gamme']) || $gammeId){
                $gamme = $gammeId  ? Gamme::find($gammeId)  : $parameters['gamme'];
                if($gamme){
                    $parameters['gamme'] = $gamme;
                    $parameters['modeles'] = $gamme->modeles;
                    $parameters['finition'] = $gamme->finition;
                    $parameters['isolant'] = $gamme->isolant;
                    $parameters['couverture'] = $gamme->couverture;
                    $parameters['huisserie'] = $gamme->qualiteHuisserie;
                    $parameters['ossature'] = $gamme->ossatureBois;
                }
            }
        }

        return view('Devis/Creation_choix_produit',$parameters);
    }

    public function index_etape3(Request $request)
    {
        // Check for previous parameters, if not found redirect
        if(!session()->has([
            'selectedClient',
            'nomProjet',
            'refProjet',
            'dateProjet',
            'gamme',
            'modele'
        ])) return redirect()->route('devis_etape_1');

        $goToNextStep = $request->input('goToNextStep');
        if($goToNextStep == "true") {
            return redirect()->route('devis_etape_4');
        }

        return view('Devis/Creation_personnalisation');
    }

    public function index_etape4(Request $request)
    {
        if(!session()->has([
            'selectedClient',
            'nomProjet',
            'refProjet',
            'dateProjet',
            'gamme',
            'modele'
        ])) return redirect()->route('devis_etape_1');

        $modele = $request->session()->get('modele');
        $modules = $modele->modules;

        return view('Devis/Creation_resume',[
            'modele' => $modele,
            'modules' => $modules
        ]);
    }

    public function index_etape_finale()
    {
        return view('Devis/Creation_termine');
    }
}
