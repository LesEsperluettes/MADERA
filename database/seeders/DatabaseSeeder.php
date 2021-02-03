<?php

namespace Database\Seeders;

use App\Models\Composant;
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
            // Gammes
            CouvertureSeeder::class,
            FinitionSeeder::class,
            IsolantSeeder::class,
            QualiteHuisserieSeeder::class,
            OssatureBoisSeeder::class,
            GammeSeeder::class,
            // Composants
            FamilleComposantSeeder::class,
            FournisseurSeeder::class,
            ComposantSeeder::class
        ]);
    }
}
