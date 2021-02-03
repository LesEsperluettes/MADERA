<?php

namespace Database\Seeders;

use App\Models\Couverture;
use App\Models\Finition;
use App\Models\Gamme;
use App\Models\Isolant;
use App\Models\OssatureBois;
use App\Models\QualiteHuisserie;
use Illuminate\Database\Seeder;

class GammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gammes = [
            array('nom' => 'Gamme n°1', 'isolant' => 1, 'couverture' => 1, 'qualite_huisserie' => 1, 'ossature_bois' => 1, 'finition' => 1),
            array('nom' => 'Gamme n°2', 'isolant' => 2, 'couverture' => 2, 'qualite_huisserie' => 2, 'ossature_bois' => 2, 'finition' => 2)
        ];

        foreach ($gammes as $gamme){
            $g = new Gamme();
            $g->nom = $gamme['nom'];
            $g->isolant()->associate(Isolant::find($gamme['isolant']));
            $g->couverture()->associate(Couverture::find($gamme['couverture']));
            $g->qualiteHuisserie()->associate(QualiteHuisserie::find($gamme['qualite_huisserie']));
            $g->ossatureBois()->associate(OssatureBois::find($gamme['ossature_bois']));
            $g->finition()->associate(Finition::find($gamme['finition']));
            $g->save();
        }
    }
}
