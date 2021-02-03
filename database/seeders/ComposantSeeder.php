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
            array('nom' => "Montant 10m x 10cm", 'famille' => 6, 'fournisseur' => 1),
            array('nom' => "Montant 10m x 5cm", 'famille' => 6, 'fournisseur' => 1),
            array('nom' => "Sabot universel 76x152mm", 'famille' => 3, 'fournisseur' => 2),
        ];

        foreach ($composants as $composant){
            $c = new Composant();
            $c->nom = $composant['nom'];
            $c->familleComposant()->associate(FamilleComposant::find($composant['famille']));
            $c->fournisseur()->associate(Fournisseur::find($composant['fournisseur']));
            $c->save();
        }

    }
}
