<?php

namespace Database\Seeders;

use App\Models\Bebidas;
use App\Models\Libros;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;

class BebidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bebidas::insert([
           
            [
                'nombre' => 'Coca Cola',
                'precio' => 1.95,
                'imagen' => 'coca_cola.jpg',
                'tipo' => 'Frias',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Sprite',
                'precio' => 1.95,
                'imagen' => 'sprite.jpg',
                'tipo' => 'Frias',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Jugo de naranja',
                'precio' => 2.75,
                'imagen' => 'jugo_naranja.jpg',
                'tipo' => 'Frias',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Citron pressé (limonada)',
                'precio' => 2.00,
                'imagen' => 'limonada.jpg',
                'tipo' => 'Frias',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Té negro',
                'precio' => 2.00,
                'imagen' => 'té_negro.jpg',
                'tipo' => 'Calientes',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Chocolate',
                'precio' => 1.50,
                'imagen' => 'chocolate.jpg',
                'tipo' => 'Calientes',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Café expreso',
                'precio' => 1.50,
                'imagen' => 'cafe_expreso.jpg',
                'tipo' => 'Calientes',
                'estado' => 'Activo',
            ],
        ]);
    
    }
}
