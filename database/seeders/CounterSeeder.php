<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    public function run()
    {

        //features
        $title_en = [
            'Since We Started',
            'Kitchens Designed',
        ];

        $title_ar = [
            "منذ أن بدأنا",
            "تصميم المطابخ",
        ];

        $number = [
            2010,
            395,
        ];


        for ($i = 0; $i < count($title_en); $i++) {
            $counter = Counter::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
                'number' => $number[$i],
                'status' => 1,
            ]);
        }
    }
}
