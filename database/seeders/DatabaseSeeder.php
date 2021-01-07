<?php

namespace Database\Seeders;

use App\Models\Fournisseur;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           ClientSeeder::class,
            FournisseurSeeder::class,
            CouvertureSeeder::class
        ]);
    }
}
