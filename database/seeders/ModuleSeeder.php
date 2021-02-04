<?php

namespace Database\Seeders;

use App\Models\Composant;
use App\Models\Devis;
use App\Models\Gamme;
use App\Models\Module;
use App\Models\Montant;
use App\Models\Section;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m = new Module();
        $m->nom = "Salon";
        $m->marge_commerciale = 10;
        $m->prix_base = 2000;
        $m->save();

        $m->sections()->save(Section::find(1));
        $m->montants()->save(Montant::find(1));
        $m->remplissage()->save(Montant::find(1));
        $m->composants()->save(Composant::find(1));

        $m2 = new Module();
        $m2->nom = "Chambre";
        $m2->marge_commerciale = 20;
        $m2->prix_base = 1500;
        $m2->save();

        $m2->sections()->save(Section::find(1));
        $m2->montants()->save(Montant::find(1));
        $m2->remplissage()->save(Montant::find(1));
        $m2->composants()->save(Composant::find(1));

    }
}
