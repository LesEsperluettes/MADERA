<?php

namespace Database\Seeders;

use App\Models\TypeParameter;
use Illuminate\Database\Seeder;

class TypeParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Section',
            'Longueur',
            'Angle entrant',
            'Angle sortant'
        ];

        foreach ($types as $type){
            $t = new TypeParameter();
            $t->name = $type;
            $t->save();
        }
    }
}
