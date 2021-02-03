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
        $m->nom = "Module n°1";
        $m->marge_commerciale = 10;
        $m->prix_base = 2000;
        $m->gamme()->associate(Gamme::find(1));
        $m->save();

        $m->sections()->save(Section::find(1));
        $m->montants()->save(Montant::find(1));
        $m->remplissage()->save(Montant::find(1));
        $m->devis()->save(Devis::find(1));
        $m->composants()->save(Composant::find(1));

    }
}
