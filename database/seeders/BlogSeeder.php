<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('blogs')->insert([
            [
                'title' => 'Cómo Mejorar tu Macro en League of Legends',
                'content' => 'El macrojuego es clave para subir de rango en League of Legends. Aprender a rotar eficientemente, controlar los objetivos y priorizar la visión en el mapa te permitirá tomar decisiones que impacten todo el equipo. En esta guía, exploramos consejos prácticos para mejorar tu toma de decisiones y aumentar tu presencia en las partidas.',
                'image' => 'macro-tips.jpg',
                'alt' => 'Macro gameplay tips',
            ],
            [
                'title' => 'Los Errores Más Comunes en la Fase de Líneas',
                'content' => 'La fase de líneas es una de las etapas más importantes del juego, pero muchos jugadores cometen errores que les cuestan partidas. Desde un mal posicionamiento hasta no aprovechar las oportunidades de presión, aquí repasamos los errores más comunes y cómo corregirlos para tener un mejor desempeño en la grieta.',
                'image' => 'laning-mistakes.jpg',
                'alt' => 'Common laning mistakes',
            ],
            [
                'title' => 'Cómo Subir de Elo Jugando Solo/Duo',
                'content' => 'Subir de rango en solo/duo puede ser un desafío, especialmente si te enfrentas a compañeros de equipo poco coordinados. En este artículo, te damos estrategias sobre cómo mejorar tu juego individual, maximizar tu impacto en las partidas y liderar a tu equipo hacia la victoria, incluso en las partidas más complicadas.',
                'image' => 'solo-duo-rank.jpg',
                'alt' => 'Climbing solo/duo rank',
            ],
            [
                'title' => 'Cómo Elegir tu Campeón Ideal para Subir de Rango',
                'content' => 'Elegir el campeón correcto puede marcar la diferencia al subir de rango en *League of Legends*. Conocer tus fortalezas, entender las composiciones de equipo y dominar un conjunto reducido de campeones te ayudará a ganar más partidas. En esta guía, analizamos cómo elegir a tu main y adaptar tu pool de campeones para distintas situaciones.',
                'image' => 'champion-selection.jpg',
                'alt' => 'Choosing your main champion',
            ],
            [
                'title' => 'El Poder de la Comunicación Efectiva en Solo Queue',
                'content' => 'La comunicación efectiva es una herramienta infravalorada en solo queue. Saber cuándo y cómo comunicarte con tu equipo sin generar frustración puede cambiar el curso de una partida. Aprende las mejores prácticas para transmitir información de manera clara y precisa, y aumenta tus probabilidades de victoria con una mejor sinergia de equipo.',
                'image' => 'effective-communication.jpg',
                'alt' => 'Effective communication in solo queue',
            ],
        ]);
        
        
    }
}
