<?php

namespace Database\Seeders;

use App\Models\Devis;
use App\Models\Gamme;
use App\Models\Modele;
use App\Models\Module;
use Illuminate\Database\Seeder;

class ModeleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m = new Modele();
        $m->nom = "Maison classique";
        $m->gamme()->associate(Gamme::find(1));
        $m->save();

        $m->modules()->save(Module::find(1));
        $m->modules()->save(Module::find(2));
        $m->devis()->save(Devis::find(1));
    }
}
