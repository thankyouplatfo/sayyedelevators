<?php

namespace Database\Seeders;

use App\Models\Cities;
use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cities::truncate();
        //
        $cities = [
            ['name' => 'الرياض'],
            ['name' => 'جدة'],
            ['name' => 'مكة'],
            ['name' => 'المكرمة'],
            ['name' => 'المدينة الم]نورة'],
            ['name' => 'سلطانة'],
            ['name' => 'الدمام'],
            ['name' => 'الطائف'],
            ['name' => 'تبوك'],
            ['name' => 'الخرج'],
            ['name' => 'بريدة'],
            ['name' => 'خميس مشيط'],
            ['name' => 'الهفوف'],
            ['name' => 'المبرز'],
            ['name' => 'حفر'],
            ['name' => 'الباطن'],
            ['name' => 'حائل'],
            ['name' => 'نجران'],
            ['name' => 'الجبيل'],
            ['name' => 'أبها'],
            ['name' => 'ينبع'],
            ['name' => 'الخُبر'],
            ['name' => 'عنيزة'],
            ['name' => 'عرعر'],
            ['name' => 'سكاكا'],
            ['name' => 'جازان'],
            ['name' => 'القريات'],
            ['name' => 'الظهران'],
            ['name' => 'القطيف'],
            ['name' => 'الباحة'],
            ['name' => 'تاروت'],
            ['name' => 'البيشة'],
            ['name' => 'الرس'],
            ['name' => 'الشفا'],
            ['name' => 'سيهات'],
            ['name' => 'المذنب'],
            ['name' => 'الخفجي'],
            ['name' => 'الدوادمي'],
            ['name' => 'صبيا'],
            ['name' => 'الزلفي'],
            ['name' => 'أبو'],
            ['name' => 'العريش'],
            ['name' => 'الصفوى'],
            ['name' => 'رابغ'],
            ['name' => 'رحيمة'],
            ['name' => 'الطريف'],
            ['name' => 'عفيف'],
            ['name' => 'طبرجل'],
            ['name' => 'الدلم'],
            ['name' => 'أملج'],
            ['name' => 'العلا'],
            ['name' => 'بقيق'],
            ['name' => 'بدر'],
            ['name' => 'حنين'],
            ['name' => 'صامطة'],
            ['name' => 'الوجه'],
            ['name' => 'البكيرية'],
            ['name' => 'نماص'],
            ['name' => 'السليل'],
            ['name' => 'تربة'],
            ['name' => 'الجموم'],
            ['name' => 'ضباء'],
            ['name' => 'الطريف'],
            ['name' => 'القيصومة'],
            ['name' => 'البطالية'],
            ['name' => 'المنيزلة'],
            ['name' => 'المجاردة'],
            ['name' => 'تنومة'],
            ['name' => 'القرين'],
            ['name' => 'أم الساهك'],
            ['name' => 'ساجر'],
            ['name' => 'الأوجام'],
            ['name' => 'فرسان'],
            ['name' => 'المندق'],
            ['name' => 'الأرطاوية'],
            ['name' => 'جبيل'],
            ['name' => 'القارة'],
            ['name' => 'مرات'],
            ['name' => 'الجفر'],
            ['name' => 'صوير'],
            ['name' => 'تمير'],
            ['name' => 'التوبي'],
            ['name' => 'الجرادية'],
            ['name' => 'المويه'],
            ['name' => 'السفانية'],
            ['name' => 'الهدا'],
            ['name' => 'المركز'],
            ['name' => 'المسلية'],
            ['name' => 'المطير'],
            ['name' => 'المزهرة'],
            ['name' => 'الدرب'],
            ['name' => 'الجليجلة'],
            ['name' => 'مليجه'],
            ['name' => 'الفويلق'],
            ['name' => 'طابا'],
        ] ;
        //
        foreach ($cities as $key => $value) {
            # code...
            Cities::create($value);
        }
    }
}
