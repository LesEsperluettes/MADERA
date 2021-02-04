<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'BE', //Bureau d'Etudes
            'CO' //Commercial
        ];

        foreach ($roles as $role){
            $r = new Role();
            $r->nom = $role;
            $r->save();
        }
    }
}
