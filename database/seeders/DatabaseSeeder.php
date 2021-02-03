<?php

namespace Database\Seeders;

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
            ComposantSeeder::class,
            // Devis
            ClientSeeder::class,
            DevisSeeder::class,
            // Remplissage
            RemplissageSeeder::class,
            // Montant
            MontantSeeder::class,
            //Section
            TypeParameterSeeder::class,
            TypeSectionSeeder::class,
            SectionSeeder::class,
            //Module
            ModuleSeeder::class
        ]);
    }
}
