<?php

namespace Database\Seeders;

use App\Models\WelcomeProject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        //WelcomeProject::factory(10)->create();
        DB::table('welcome_projects')->insert([
            "path" => 'images/projects/1.jpg',
            "alt" => 'سكن ممرضات مستشفى أجياد الذي تقوم مؤسسة أحمد السيد لمعدات السلامة بصيانة مصاعده',
        ]);
        DB::table('welcome_projects')->insert([
            "path" => 'images/projects/1.jpg',
            "alt" => 'وقف أحمد محمد براشي فرع الخالدية الذي تقوم مؤسسة أحمد السيد لمعدات السلامة بصيانة مصاعده',
        ]);
        DB::table('welcome_projects')->insert([
            "path" => 'images/projects/3.png',
            "alt" => 'وقف أحمد محمد براشي فرع بطحاء قريش الذي تقوم مؤسسة أحمد السيد لمعدات السلامة بصيانة مصاعده',
        ]);
        DB::table('welcome_projects')->insert([
            "path" => 'images/projects/4.png',
            "alt" => 'سوق بطحاء قريش التجاري الذي تقوم مؤسسة أحمد السيد لمعدات السلامة بصيانة مصاعده',
        ]);
    }
}
