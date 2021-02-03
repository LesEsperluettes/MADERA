<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Devis;
use App\Models\Facturation;
use Illuminate\Database\Seeder;

class DevisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = new Devis();
        $d->nom_projet = "Projet n°1";
        $d->reference_projet = "prj-1";
        $d->client()->associate(Client::inRandomOrder()->first());
        $d->save();

        $f = new Facturation();
        $f->total_demande = 100;
        $f->total_paye = 50;
        $f->devis()->associate($d);
        $f->save();
    }
}
