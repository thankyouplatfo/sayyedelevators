<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        //
        DB::table('users')->insert([
            "name" => "sayyedelevators",
            "email" => "sayyedelevators@sayyedelevators.com",
            "role_id" => "1",
            "type" => "0",
            "password" => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ]);
        //
        $this->call([WelcomeHeaderSeeder::class]);
        $this->call([WelcomeProjectSeeder::class]);
        $this->call([WelcomeAboutSeeder::class]);
        $this->call([RoleSeeder::class]);
        $this->call([PermissionSeeder::class]);
        //$this->call([PermissionRoleSeeder::class]);
        $this->call([ContactUsSeeder::class]);

    }
}
