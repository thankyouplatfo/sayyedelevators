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
            "email" => "sayyedelevators@sael.com",
            "role_id" => "1",
            "type" => "1",
            "password" => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ]);
        DB::table('users')->insert([
            'name' => 'المهندس/ احمد السيد',
            'email' => 'e.ah.sa@sael.com',
            'role_id' => '1',
            'type' => '1',
            "password" => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ]);
        DB::table('users')->insert([
            'name' => 'المهندس/ مصطفى نصر',
            'email' => 'e.mos.nasr@sael.com',
            'role_id' => '1',
            'type' => '1',
            "password" => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ]);
        DB::table('users')->insert([
            'name' => 'المهندس/ احمد بشرى',
            'email' => 'e.ah.bush@sael.com',
            'role_id' => '1',
            'type' => '1',
            "password" => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ]);
        DB::table('users')->insert([
            'name' => 'المهندس/ مهدي المشكلي',
            'email' => 'e.mah.mash@sael.com',
            'role_id' => '1',
            'type' => '1',
            "password" => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ]);
        DB::table('users')->insert([
            'name' => 'المدير التقني/ معتز المشلي',
            'email' => 'm.m@sael.com',
            'role_id' => '1',
            'type' => '1',
            "password" => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ]);
        DB::table('users')->insert([
            'name' => 'الفني/ ياسر مجدي',
            'email' => 't.ya.ma@sael.com',
            'role_id' => '2',
            'type' => '1',
            "password" => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ]);
        DB::table('users')->insert([
            'name' => 'الفني/ عمار الشرماني',
            'email' => 't.am.sh@sael.com',
            'role_id' => '2',
            'type' => '1',
            "password" => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ]);
        //
        $this->call([WelcomeHeaderSeeder::class]);
        $this->call([WelcomeProjectSeeder::class]);
        $this->call([WelcomeAboutSeeder::class]);
        $this->call([RoleSeeder::class]);
        $this->call([PermissionSeeder::class]);
        //$this->call([PermissionRoleSeeder::class]);
        $this->call([CitySeed::class]);
        $this->call([CountrySeeder::class]);
        $this->call([CommunicationSeeder::class]);
        $this->call([MediaSeeder::class]);
    }
}
