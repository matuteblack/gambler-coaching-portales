<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('packages')->insert([
            [
                'name' => 'TIER S',
                'type' => 'Paquete SoloQ',
                // TODO: cambiar los precios a centavos
                'price' => 125,
                'description' => 'Basic package',
                'sessions' => 16,
                'duration' => 90,
                'image' => 'challenger-2023.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'TIER A',
                'type' => 'Paquete SoloQ',
                'price' => 95,
                'description' => 'Basic package',
                'sessions' => 12,
                'duration' => 90,
                'image' => 'grandmaster-2023.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'TIER B',
                'type' => 'Paquete SoloQ',
                'price' => 65,
                'description' => 'Basic package',
                'sessions' => 8,
                'duration' => 90,
                'image' => 'master-2023.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'TIER S',
                'type' => 'Paquete DuoQ',
                'price' => 170,
                'description' => 'Basic package',
                'sessions' => 16,
                'duration' => 120,
                'image' => 'challenger-2023.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'TIER A',
                'type' => 'Paquete DuoQ',
                'price' => 90,
                'description' => 'Basic package',
                'sessions' => 8,
                'duration' => 120,
                'image' => 'grandmaster-2023.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
