<?php

namespace Database\Seeders;

use App\Models\Montant;
use Illuminate\Database\Seeder;

class MontantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $montants = [
            array('debut' => 0,'fin' => 100),
            array('debut' => 50, 'fin' => 100)
        ];

        foreach ($montants as $montant){
            $m = new Montant();
            $m->debut = $montant['debut'];
            $m->fin = $montant['fin'];
            $m->save();
        }
    }
}
