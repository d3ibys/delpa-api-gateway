<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClientKey;

class ClientKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedClientsKeys = [
            [
                'id' => 1,
                'client_id' => 1,
                'apikey' => "1234",
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
        ];

        foreach ($seedClientsKeys as $seedClientKey) {
            $clientKey = ClientKey::create($seedClientKey);
        }
    }
}
