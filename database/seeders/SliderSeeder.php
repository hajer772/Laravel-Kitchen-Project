<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    public function run()
    {
        $images = [
            'slider-img-1.jpg',
            'slider-img-2.jpg',
            'slider-img-3.jpg',
            'slider-img-4.jpg'
        ];

        $title_en = [
            "Kitchen Designs",
            "Kitchen Panels",
            "Living Rooms",
            "Dining Rooms"
        ];
      

        $title_ar = [
           "تصاميم المطابخ",
           "ألواح المطابخ",
            "غرف المعيشة",
            "غرف الطعام",
        ];
       

        $description_en = [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu."
        ];

        $description_ar = [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu."
        ];

        $icon = [
            "fa fa-clipboard",
            "fa fa-star",
            "fa fa-globe",
            "fa fa-chess-rook",
        ];
      
        for ($s = 0; $s < count(value: $images); $s++) {
            $slider = Slider::create([
                'ar' => [
                    'title' => $title_ar[$s],
                    'description' => $description_ar[$s],
              
                    
                ],
                'en' => [
                    'title' => $title_en[$s],
                    'description' => $description_en[$s],
                  

                ],
                    'icon'=>$icon[$s],

                'status' => 1
            ]);
            $slider->file()->create([
                'path' => 'seeders/images/' . $images[$s],
                'type' => 'image'
            ]);
        }
    }
}
