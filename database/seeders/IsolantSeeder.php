<?php

namespace Database\Seeders;

use App\Models\Isolant;
use Illuminate\Database\Seeder;

class IsolantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $isolants = [
            'synthétique',
            'naturel',
            'biologique'
        ];

        foreach ($isolants as $isolant){
            $i = new Isolant();
            $i->type = $isolant;
            $i->save();
        }
    }
}
