<?php

namespace Database\Seeders;

use App\Models\Couverture;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouvertureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $couvertures = [
            'tuiles',
            'ardoises'
        ];

        foreach($couvertures as $couverture){
            $c = new Couverture;
            $c->type = $couverture;
            $c->save();
        }

    }
}
