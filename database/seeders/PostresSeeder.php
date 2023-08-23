<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postres')->insert([
            [
                'nombre' => 'Producto 1',
                'precio' => 19.99,
                'descripcion' => 'Descripción del producto 1',
            ],
            [
                'nombre' => 'Producto 2',
                'precio' => 29.99,
                'descripcion' => 'Descripción del producto 2',
            ],
            [
                'nombre' => 'Producto 3',
                'precio' => 10.50,
                'descripcion' => 'Descripción del producto 3',
            ],
            // ... Agrega los otros datos aquí ...
        ]);
    }
}
