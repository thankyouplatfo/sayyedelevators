<?php

namespace Database\Seeders;

use App\Models\WelcomeAbout;
use Illuminate\Database\Seeder;

class WelcomeAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        WelcomeAbout::factory(3)->create();
    }
}
