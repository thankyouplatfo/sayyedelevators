<?php

namespace Database\Seeders;

use App\Models\permission;
use Illuminate\Database\Seeder;

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
        permission::factory(3)->create();
    }
}
