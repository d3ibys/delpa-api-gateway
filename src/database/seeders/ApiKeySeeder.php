<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApiKey;

class ApiKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedApiKeys = [
            [
                'id' => 1,
                'client_key_id' => 1,
                'service_id' => 1,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 2,
                'client_key_id' => 1,
                'service_id' => 2,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 3,
                'client_key_id' => 1,
                'service_id' => 3,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 4,
                'client_key_id' => 1,
                'service_id' => 4,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 5,
                'client_key_id' => 1,
                'service_id' => 5,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 6,
                'client_key_id' => 1,
                'service_id' => 6,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 7,
                'client_key_id' => 1,
                'service_id' => 7,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
        ];

        foreach ($seedApiKeys as $seedApiKey) {
            $apiKey = ApiKey::create($seedApiKey);
        }
    }
}
