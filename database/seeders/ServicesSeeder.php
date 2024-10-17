<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //features
        $title_ar = [
            "تصاميم حديثة",
            "أسعار معقولة",
            "عمل عالي الجودة",
            "دعم مستقبلي",
        ];
        $title_en = [
            "Modern Designs",
            "Affordable Prices",
            "Quality Work",
            "Future Support",

        ];
        $description_ar = [
            "لوريم إيبسوم دولور سيت أميت، consectetur adipiscing إيليت. Pellentesque dignissim viverra ultrices.",
            "لوريم إيبسوم دولور سيت أميت، consectetur adipiscing إيليت. Pellentesque dignissim viverra ultrices.",
            "لوريم إيبسوم دولور سيت أميت، consectetur adipiscing إيليت. Pellentesque dignissim viverra ultrices.",
            "لوريم إيبسوم دولور سيت أميت، consectetur adipiscing إيليت. Pellentesque dignissim viverra ultrices.",

        ];
        $description_en = [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim viverra ultrices.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim viverra ultrices.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim viverra ultrices.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim viverra ultrices.",
        ];
        $number = [
            '01.',
            '03.',
            '02.',
            '04.',
        ];



        for ($i = 0; $i < count($title_en); $i++) {
            $services = Service::create([

                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i]
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i]
                ],
                'status' => 1,
                'number' => $number[$i],

            ]);
        }
    }
}
