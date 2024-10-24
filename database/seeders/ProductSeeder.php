<?php

namespace Database\Seeders;

use App\Models\Product;use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $image = [
            'kitchen1.jpg',
            'kitchen2.jpg',
            'kitchen3.jpg',
            'kitchen4.jpg',
            "kitchen5.jpg",
            'kitchen6.jpg',
            'kitchen7.jpg',
            'kitchen8.jpg',
            'kitchen9.jpg',
            'kitchen10.jpg',
        ];
        $cat_name = [
            'graphic',
            'graphic',
            "seo",
            'web-design',
            'web-design',
            'marketing',
            'marketing',
            'marketing',
            "graphic",
            "seo"
        ];

        for ($i = 0; $i < count($image); $i++) {
            $product = Product::create(
                [
                    'status' => 1,
                    'category_name' => $cat_name[$i],


                ]
            );
            $product->file()->create([
                'path' => 'seeders/images/' . $image[$i],
                'type' => 'image',
            ]);
        }
    }
}
