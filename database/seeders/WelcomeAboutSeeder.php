<?php

namespace Database\Seeders;

use App\Models\WelcomeAbout;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        //WelcomeAbout::factory(3)->create();
        DB::table('welcome_abouts')->insert([
            'description' => 'أحمد السيد هي مؤسسة سعودية محلية تقوم بصيانة المصاعد وهي مؤسسة تمتلك رصيد من الخبرة يبلغ 10 أعوام في المجال (مجال المصاعد) تتميز المؤسسة بكادرها المتأخي والطموح والمتميز والمتخصص بدأ من المدير العام م/أحمد السيد ووصولا إلى نائب المدير ومدير قسم المصاعد م/ مصطفى نصر وانتهاءا بأصغر الموظفين حسام المشكلي مشرف التغطيات الإعلامية في المؤسسة كما أن المؤسسة تخدم ما يزيد على العشرين عميل وتطمح في المزيد قريبا تخدم وتمتد الرقعة الجغرافية الخدمية للمؤسسة لتشمل كلا من (مكة - جدة - الطائف) وترغب المؤسسة مستقبلا تغطية كافة المدن الرئيسية في المملكة.'
        ]);
    }
}
