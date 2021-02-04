<?php

namespace Database\Seeders;

use App\Models\Composant;
use App\Models\FamilleComposant;
use App\Models\Fournisseur;
use Illuminate\Database\Seeder;

class ComposantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $composants = [
            array('nom' => "Montant 45x45mm 3m", 'famille' => 6, 'fournisseur' => 1, 'PU' => 6.00),
            array('nom' => "Montant 45x70mm 4m", 'famille' => 6, 'fournisseur' => 1, 'PU' => 10),
            array('nom' => "Sabot universel 76x152mm", 'famille' => 3, 'fournisseur' => 2, 'PU' => 2),
        ];

        foreach ($composants as $composant){
            $c = new Composant();
            $c->nom = $composant['nom'];
            $c->prix_unitaire = $composant['PU'];
            $c->familleComposant()->associate(FamilleComposant::find($composant['famille']));
            $c->fournisseur()->associate(Fournisseur::find($composant['fournisseur']));
            $c->save();
        }

    }
}
