<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedClients = [
            ['id' => 1,'name' => "Administrador"]
        ];


        foreach ($seedClients as $seedClient) {
            $apiKey = Client::create($seedClient);
        }
    }
}
