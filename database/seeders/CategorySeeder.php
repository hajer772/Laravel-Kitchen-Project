<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $title_en = [
            'Wood Panel',
            'Imported Panels',
            'Artistic',
            'Elite Class'

        ];
        $title_ar = [
            'لوحة خشبية',
            'ألواح مستوردة',
            'فني',
            'فئة النخبة'
        ];

        $class_name = ['graphic', 'web-design', 'seo', 'marketing'];

        for ($i = 0; $i < count($title_ar); $i++) {

            $category = Category::create(
                [
                    'ar' => [
                        'title' => $title_ar[$i],


                    ],
                    'en' => [
                        'title' => $title_en[$i],


                    ],
                    'status' => 1,
                    'class_name' => $class_name[$i],

                ]
            );
        }
    }
}
