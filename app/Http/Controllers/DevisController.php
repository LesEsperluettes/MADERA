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
            return redirect()->route('devis_etape_2')->with([
                'selectedClient' => $client,
                'nomProjet' => $nomProjet,
                'refProjet' => $refProjet,
                'dateProjet' => $dateProjet
            ]);
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
        $parameters = [
            'gammes' => Gamme::all(),
        ];

        $goToNextStep = $request->input('goToNextStep');
        $gammeId = $request->input('gammeId');
        $modeleId = $request->input('modeleId');

        if($goToNextStep == "true") {
            dd($goToNextStep);
        }else{
            // Load modeles if gamme is selected
            if(isset($gammeId)){
                $gamme = Gamme::find($gammeId);
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
