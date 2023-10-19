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
                'nombre' => 'Boisson gazeuse (Coca Cola)',
                'precio' => 1.50,
                'imagen' => 'coca_cola.jpg',
                'tipo' => 'Frias',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Boisson gazeuse (Sprite)',
                'precio' => 1.50,
                'imagen' => 'sprite.jpg',
                'tipo' => 'Frias',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Frapucchino',
                'precio' => 3.50,
                'imagen' => 'frapucchino.jpg',
                'tipo' => 'Frias',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Eau (agua)',
                'precio' => 1.25,
                'imagen' => 'Agua.jpg',
                'tipo' => 'Frias',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Jus d’orange (Jugo de naranja)',
                'precio' => 1.75,
                'imagen' => 'jugo_naranja.jpg',
                'tipo' => 'Frias',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Citron pressé (limonada)',
                'precio' => 3.00,
                'imagen' => 'limonada.jpg',
                'tipo' => 'Frias',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Thé noir (té negro)',
                'precio' => 2.50,
                'imagen' => 'te_negro.jpg',
                'tipo' => 'Calientes',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Thé vert (té verde)',
                'precio' => 2.25,
                'imagen' => 'te_verde.jpg',
                'tipo' => 'Calientes',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Thé á la camomille (té de manzanilla)',
                'precio' => 2.00,
                'imagen' => 'te_manzanilla.png',
                'tipo' => 'Calientes',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Chocolat',
                'precio' => 2.50,
                'imagen' => 'chocolate.jpg',
                'tipo' => 'Calientes',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Café',
                'precio' => 2.50,
                'imagen' => 'cafe_expreso.jpg',
                'tipo' => 'Calientes',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Cappuccino',
                'precio' => 3.00,
                'imagen' => 'Cappuccino.jpg',
                'tipo' => 'Calientes',
                'estado' => 'Activo',
            ],
        ]);
    
    }
}
