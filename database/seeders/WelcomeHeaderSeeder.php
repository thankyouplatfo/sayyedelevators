<?php

namespace Database\Seeders;

use App\Models\welcomeHeader;
use Illuminate\Database\Seeder;

class WelcomeHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        welcomeHeader::factory(10);
    }
}
