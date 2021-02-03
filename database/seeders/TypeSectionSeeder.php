<?php

namespace Database\Seeders;

use App\Models\TypeParameter;
use App\Models\TypeSection;
use Illuminate\Database\Seeder;

class TypeSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types_section = [
            // Mur droit droit = Section / Longueur
            array('type' => 'Mur droit droit', 'params' => [
                    array('id' => 1, 'valeur' => 0, 'ordre' => 0),
                    array('id' => 2, 'valeur' => 0, 'ordre' => 1),
                ]
            ),
            // Mur avec angle = Section / Longueur / Angle entrant / Section / Longueur / Angle sortant / Section / Longueur
            array('type' => 'Mur avec angle', 'params' => [
                    array('id' => 1, 'valeur' => 0, 'ordre' => 0),
                    array('id' => 2, 'valeur' => 0, 'ordre' => 1),
                    array('id' => 3, 'valeur' => 0, 'ordre' => 2),
                    array('id' => 1, 'valeur' => 0, 'ordre' => 3),
                    array('id' => 2, 'valeur' => 0, 'ordre' => 4),
                    array('id' => 4, 'valeur' => 0, 'ordre' => 5),
                    array('id' => 1, 'valeur' => 0, 'ordre' => 6),
                    array('id' => 2, 'valeur' => 0, 'ordre' => 7),
                ]
            )
        ];

        foreach ($types_section as $type_section){
            $ts = new TypeSection();
            $ts->type = $type_section['type'];
            $ts->save();

            foreach($type_section['params'] as $param){
                $ts->parametres()->save(TypeParameter::find($param['id'])
                    ,['valeur' => $param['valeur'],'ordre' => $param['ordre']]);
            }
        }
    }
}
