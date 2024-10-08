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
                'name' => 'Basic',
                'price' => 100,
                'description' => 'Basic package',
                'sessions' => 1,
                'duration' => 30,
            ],
            [
                'name' => 'Standard',
                'price' => 200,
                'description' => 'Standard package',
                'sessions' => 2,
                'duration' => 60,
            ],
            [
                'name' => 'Premium',
                'price' => 300,
                'description' => 'Premium package',
                'sessions' => 3,
                'duration' => 90,
            ],
        ]);
    }
}
