<?php

namespace Database\Seeders;

use App\Models\Postres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Postres::insert([
            [
                'nombre' => 'Crème Brûlée',
                'precio' => 3.00,
                'imagen' => 'Creeme_brulee.jpg',
                'descripcion' => 'Es un postre francés que consiste en una crema cuya superficie se ha espolvoreado de azúcar con el fin de quemarlo y obtener así una fina capa crujiente de caramelo.',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Crepas dulces',
                'precio' => 5.50,
                'imagen' => 'Crepas_dulces.jpg',
                'descripcion' => 'Es un tipo de masa cocinada muy delgada a base de harina de trigo en forma de disco.',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Croissant',
                'precio' => 2.00,
                'imagen' => 'Croissant.jpg',
                'descripcion' => 'Es una pieza de panadería de origen francés.',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Macarons',
                'precio' => 1.00,
                'imagen' => 'Macarons.jpg',
                'descripcion' => 'Es un tipo de galleta tradicional de la gastronomía francesa hecha de clara de huevo, harina de almendra, azúcar y azúcar glas. Se presentan como una galleta con relleno de crema de mantequilla, jalea o ganache.',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Éclair',
                'precio' => 2.00,
                'imagen' => 'Eclair.jpg',
                'descripcion' => 'A veces también petisús, relámpago o palo de jacob, es un bollo fino o dona hecho con pasta choux, a la que se da forma alargada y se hornea hasta que queda crujiente y hueco, ​ y que habitualmente se rellena',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Mille-Feuille',
                'precio' => 2.00,
                'imagen' => 'Mille-Feuille.jpg',
                'descripcion' => 'Es un postre francés hecho de hojaldre con capas de crema pastelera. Su forma moderna estuvo influenciada por las mejoras realizadas por Marie-Antoine Carême.',
                'estado' => 'Activo',
            ],
            // ... Agrega los otros datos aquí ...
        ]);
    }
}
