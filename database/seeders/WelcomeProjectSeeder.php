<?php

namespace Database\Seeders;

use App\Models\WelcomeProject;
use Illuminate\Database\Seeder;

class WelcomeProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        WelcomeProject::factory(10);
    }
}
