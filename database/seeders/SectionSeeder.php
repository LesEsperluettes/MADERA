<?php

namespace Database\Seeders;

use App\Models\Composant;
use App\Models\Section;
use App\Models\TypeSection;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = new Section();
        $s->type()->associate(TypeSection::find(1));
        $s->nom = "Mur 2m x 5m";
        $s->save();

        $s->composants()->save(Composant::find('1'),['quantite' => 4]);
        $s->composants()->save(Composant::find('3'),['quantite' => 4]);
    }
}
