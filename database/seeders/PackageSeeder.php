<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('packages')->insert([
            [
                'name' => 'TIER S',
                'type' => 'Paquete SoloQ',
                'price' => 125,
                'description' => 'Este paquete premium está diseñado para jugadores de todos los niveles y roles, enfocado en mejorar tu juego con cualquier campeón. Con 16 sesiones, tendrás el tiempo necesario para profundizar en todos los aspectos del juego junto a tu coach.',
                'sessions' => 16,
                'duration' => 90,
                'image' => 'challenger-2023.png',
                'alt' => 'Challenger 2023',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'TIER A',
                'type' => 'Paquete SoloQ',
                'price' => 95,
                'description' => 'Con 12 sesiones, este paquete es ideal para jugadores que buscan mejorar su desempeño general, ya sea en la fase de líneas, mid-game o teamfights, con cualquier campeón y en cualquier rol.',
                'sessions' => 12,
                'duration' => 90,
                'image' => 'grandmaster-2023.png',
                'alt' => 'Grandmaster 2023',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'TIER B',
                'type' => 'Paquete SoloQ',
                'price' => 65,
                'description' => 'Este paquete de 8 sesiones ofrece una excelente base para jugadores que quieren reforzar sus habilidades con cualquier campeón y en cualquier rol, ajustándose a tus necesidades específicas en el juego.',
                'sessions' => 8,
                'duration' => 90,
                'image' => 'master-2023.png',
                'alt' => 'Master 2023',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'TIER S',
                'type' => 'Paquete DuoQ',
                'price' => 170,
                'description' => 'Con 16 sesiones enfocadas en la sinergia y la coordinación, este paquete DuoQ está diseñado para ti y tu compañero, sin importar el rol o los campeones que jueguen. Aprenderán estrategias avanzadas en todos los niveles de juego.',
                'sessions' => 16,
                'duration' => 120,
                'image' => 'challenger-2023.png',
                'alt' => 'Challenger 2023',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'TIER A',
                'type' => 'Paquete DuoQ',
                'price' => 90,
                'description' => 'Con 8 sesiones dedicadas, este paquete DuoQ es perfecto para mejorar la coordinación entre tú y tu compañero en cualquier rol o con cualquier campeón, adaptado a su estilo de juego.',
                'sessions' => 8,
                'duration' => 120,
                'image' => 'grandmaster-2023.png',
                'alt' => 'Grandmaster 2023',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
