<?php

namespace Database\Seeders;

use App\Models\Communication;
use Illuminate\Database\Seeder;

class CommunicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Communication::factory(10)->create();
    }
}
