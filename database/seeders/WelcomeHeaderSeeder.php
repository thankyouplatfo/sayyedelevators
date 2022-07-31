<?php

namespace Database\Seeders;

use App\Models\welcomeHeader;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        //welcomeHeader::factory(10)->create();
        DB::table('welcome_headers')->insert([
            "path" => 'images/logos/sayy4d-elevators-logo.png',
            "alt" => 'الشعار الرسمي البديل لمؤسسة أحمد السيد لمعدات السلامة',
        ]);
    }
}
