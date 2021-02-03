<?php

namespace Database\Seeders;

use App\Models\OssatureBois;
use Illuminate\Database\Seeder;

class OssatureBoisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ossatures_bois = [
            'Sans angle',
            'Avec angles ouvrant',
            'Avec angles fermant'
        ];

        foreach($ossatures_bois as $ossature_bois){
            $o = new OssatureBois();
            $o->type = $ossature_bois;
            $o->save();
        }
    }
}
