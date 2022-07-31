<?php

namespace Database\Seeders;

use App\Models\permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //permission::factory(3)->create();
        DB::table('permissions')->insert([
            'desc' => 'مدير المستخدمين',
            'name' => 'admin-users',
        ]);
        DB::table('permissions')->insert([
            'desc' => 'مدير المحتوى ',
            'name' => 'admin-content',
        ]);
        DB::table('permissions')->insert([
            'desc' => 'مدير الصلاحيات',
            'name' => 'admin-permission',
        ]);
    }
}
