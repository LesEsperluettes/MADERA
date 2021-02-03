<?php

namespace Database\Seeders;

use App\Models\Finition;
use Illuminate\Database\Seeder;

class FinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $finitions = [
            'bois',
            'crépis'
        ];

        foreach ($finitions as $finition){
            $f = new Finition();
            $f->type = $finition;
            $f->save();
        }
    }
}
