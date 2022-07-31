<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Role::factory(3)->create();
        DB::table('roles')->insert([
            'name' => 'مدير عام',
        ]);
        DB::table('roles')->insert([
            'name' => 'مدير ',
        ]);
        DB::table('roles')->insert([
            'name' => 'مهندس',
        ]);
        DB::table('roles')->insert([
            'name' => 'فني',
        ]);
        DB::table('roles')->insert([
            'name' => 'مساعد فني',
        ]);
        DB::table('roles')->insert([
            'name' => 'عامل',
        ]);
        DB::table('roles')->insert([
            'name' => 'مورد',
        ]);
        DB::table('roles')->insert([
            'name' => 'مستخدم',
        ]);
    }
}
