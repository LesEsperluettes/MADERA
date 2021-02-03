<?php

namespace Database\Seeders;

use App\Models\Finition;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::find(1);
        $be_role = Role::find(2);
        $co_role = Role::find(2);

        // Create admin user account
        $admin = new User();
        $admin->name = "admin";
        $admin->email = "admin@madera.fr";
        $admin->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // 'password' encrypted
        $admin->email_verified_at = now();
        $admin->role()->associate($admin_role);
        $admin->save();

        // Create BE (Bureau d'étude) user account
        $be = new User();
        $be->name = "be";
        $be->email = "be@madera.fr";
        $be->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // 'password' encrypted
        $be->email_verified_at = now();
        $be->role()->associate($be_role);
        $be->save();

        // Create CO (Commercial) user account
        $co = new User();
        $co->name = "co";
        $co->email = "co@madera.fr";
        $co->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // 'password' encrypted
        $co->email_verified_at = now();
        $co->role()->associate($co_role);
        $co->save();
    }
}
