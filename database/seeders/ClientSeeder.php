<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
        $logos = ['client1.png', 'client2.png', 'client3.png', 'client4.png','client5.png','client6.png'];
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
