<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Media::factory(10)->create();
        DB::table('media')->insert([
            'url' => 'https://www.facebook.com/sayye4elevators/',
            'ff_code' => '<i class="fa-brands fa-facebook"></i>',
        ]);
        DB::table('media')->insert([
            'url' => 'https://www.twitter.com/sayye4elevators/',
            'ff_code' => '<i class="fa-brands fa-twitter"></i>',
        ]);
        DB::table('media')->insert([
            'url' => 'https://www.instagram.com/sayye4elevators/',
            'ff_code' => '<i class="fa-brands fa-instagram"></i>',
        ]);
    }
}
