<?php

namespace Database\Seeders;

use App\Models\Remplissage;
use Illuminate\Database\Seeder;

class RemplissageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $remplissages = [
            'fibres naturelles',
            'laine de bois',
            'chanvre',
            'laine minérale'
        ];

        foreach ($remplissages as $remplissage){
            $r = new Remplissage();
            $r->type = $remplissage;
            $r->save();
        }

    }
}
