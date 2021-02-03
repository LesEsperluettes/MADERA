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
        $g1 = new Gamme();
        $g1->nom = "Gamme n°1";
        $g1->isolant()->associate(Isolant::find(1));
        $g1->couverture()->associate(Couverture::find(1));
        $g1->qualiteHuisserie()->associate(QualiteHuisserie::find(1));
        $g1->ossatureBois()->associate(OssatureBois::find(1));
        $g1->finition()->associate(Finition::find(1));
        $g1->save();

        $g2 = new Gamme();
        $g2->nom = "Gamme n°2";
        $g2->isolant()->associate(Isolant::find(2));
        $g2->couverture()->associate(Couverture::find(2));
        $g2->qualiteHuisserie()->associate(QualiteHuisserie::find(2));
        $g2->ossatureBois()->associate(OssatureBois::find(2));
        $g2->finition()->associate(Finition::find(2));
        $g2->save();
    }
}
