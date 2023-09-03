<?php

namespace Database\Seeders;

use App\Models\Libros;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Libros::insert([
            [
                'nombre' => 'Barbe-bleue',
                'precio' => null,
                'imagen' => 'Barbe-bleue.jpg',
                'descripcion' => 'Es un cuento de hadas europeo, recopilado y adaptado por Charles Perrault en 1695; se publicó en 1697 en su libro Cuentos de antaño;​​ también es el nombre del protagonista.',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Histoires a lire le soir',
                'precio' => null,
                'imagen' => 'Histoires_a_lire _le_ soir.jpg',
                'descripcion' => '12 historias variadas, llenas de emociones o humor, para iniciar a los jóvenes lectores (8-12 años) en el placer de la lectura.',
                'estado' => 'Inactivo',
            ],
            [
                'nombre' => "Jet'aimerai toujours quoqu'il arrive",
                'precio' => null,
                'imagen' => 'Jetaimerai_toujours_quoquil_arrive.jpg',
                'descripcion' => 'El pequeño zorro está preocupado porque teme que su madre ya no lo quiera si hace demasiadas travesuras... Pero su madre le explica que su amor durará para siempre... ¡pase lo que pase! Un álbum para tranquilizar a todos los niños.
                ',
                'estado' => 'Inactivo',
            ],
            [
                'nombre' => 'Le petit nicolas',
                'precio' => null,
                'imagen' => 'Le_petit_nicolas.jpg',
                'descripcion' => 'El pequeño Nicolás es una serie de libros infantiles, obra del escritor y guionista de cómics francés René Goscinny. También se hace referencia con ese sobrenombre al personaje principal de la serie y al primer libro de la misma.',
                'estado' => 'Inactivo',
            ],
            [
                'nombre' => 'Le petit routard',
                'precio' => null,
                'imagen' => 'Le_petit_routard.jpg',
                'descripcion' => ' cuenta la historia de una tortuga que va en busca de cocos frescos a la Isla Mauricio. Toda la familia aprende cada día algo nuevo sobre la isla. Este libro puede ser, tanto una guía de viaje para niños, como un libro de aventuras, lleno de ilustraciones originales para los más pequeños.',
                'estado' => 'Inactivo',
            ],
            [
                'nombre' => 'Le petit prince',
                'precio' => null,
                'imagen' => 'Le_petit_prince.jpg',
                'descripcion' => 'El principito es un cuento poético que viene acompañado de ilustraciones hechas con acuarelas por el mismo Saint-Exupéry.',
                'estado' => 'Inactivo',
            ],
            [
                'nombre' => 'Les cocktails de Black et mortimer',
                'precio' => null,
                'imagen' => 'Les_cocktails_de_Black_et_mortimer.jpg',
                'descripcion' => 'Los cócteles de Blake y Mortimer nos sumergen en el ambiente tan británico del cómic. En el Centaur Club, del que son miembros nuestros héroes, degustaremos cócteles clásicos de la vieja Inglaterra. Redescubriremos el Zapatero de Jerez, que dio lugar a la invención de la paja y la coctelera. Prenderemos un Blue Blazer, el primer cóctel flambeado de la historia. Después de la cena, un cóctel After Eight con sabores de menta y chocolate es imprescindible.',
                'estado' => 'Inactivo',
            ],
        ]);
    }
}
