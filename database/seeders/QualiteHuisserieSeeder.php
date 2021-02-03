<?php

namespace Database\Seeders;

use App\Models\QualiteHuisserie;
use Illuminate\Database\Seeder;

class QualiteHuisserieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $qualites_huisserie = [
            'classique',
            'économique'
        ];

        foreach($qualites_huisserie as $qualite_huisserie){
            $qh = new QualiteHuisserie();
            $qh->type = $qualite_huisserie;
            $qh->save();
        }
    }
}
