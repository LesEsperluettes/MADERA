<?php

namespace Database\Seeders;

use App\Models\FamilleComposant;
use Illuminate\Database\Seeder;

class FamilleComposantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $familles = [
            'Lisses',
            'Contreforts',
            "Sabots d'assemblage",
            'Goujons de fixation',
            'Supports de sol',
            'Montants',
            'Remplissages',
            'Visserie',
            'Panneaux'
        ];

        foreach ($familles as $famille){
            $fc = new FamilleComposant();
            $fc->nom = $famille;
            $fc->save();
        }
    }
}
