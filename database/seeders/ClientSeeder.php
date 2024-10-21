<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
        $logos = ['client-1.png', 'client-1.png', 'client-1.png', 'client-1.png'];
        for ($c = 0; $c < count($logos); $c++) {
            $client = Client::create([
                'status' => 1
            ]);
            $client->file()->create([
                'path' => 'seeders/images/' . $logos[$c],
                'type' => 'image'
            ]);
        }
    }
}
