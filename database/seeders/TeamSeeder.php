<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = ['team1.jpg', 'team2.jpg', 'team3.jpg', 'team1.jpg'];

        $team_name_en = ['Amar Amr', 'Ahmed Mohamed', 'Amar Amr', 'Ahmed Mohamed'];
        $team_name_ar = ["عمار عمرو", "أحمد محمد", "عمار عمرو", "أحمد محمد",];

        $position_en = ['Businessman', 'Interior Designer', 'Company Owner', 'Designer'];
        $position_ar = ['رجل أعمال', 'مصمم داخلي', 'مالك الشركة', 'مصمم'];


        for ($s = 0; $s < count($images); $s++) {
            $team = Team::create(attributes: [
                'ar' => [
                    // 'title' => $titles[$s],
                    'team_name' => $team_name_ar[$s],
                    'position' => $position_ar[$s],
                ],
                'en' => [
                    // 'title' => $titles[$s],
                    'team_name' => $team_name_en[$s],
                    'position' => $position_en[$s],

                ],
                'status' => 1,
            ]);
            $team->file()->create([
                'path' => 'seeders/images/' . $images[$s],
                'type' => 'image'
            ]);
        }
    }
}
