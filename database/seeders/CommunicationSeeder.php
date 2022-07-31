<?php

namespace Database\Seeders;

use App\Models\Communication;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        //Communication::factory(10)->create();
        //
        DB::table('communications')->insert([
            "welcome" => 'قم بالتواصل معنا وكن على ثقة بأننا نستمع لشكواك أو مقترحك وعمل على حلها ',
            "phone" => '555850171',
            "email" => 'sayyedElevators@gmail.com',
            "city_id" => '3',
            "country_id" => '195',
            "url" => 'https://goo.gl/maps/D2ksqvEMG8pAE9Jn9',
        ]);
    }
}
