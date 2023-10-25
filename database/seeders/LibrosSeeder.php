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
                'nombre' => 'Notre Dame De Paris',
                'precio' => null,
                'imagen' => 'Notre_Dame _De_Paris.jpeg',
                'descripcion' => 'Es una novela de Victor Hugo, publicada en 1831 y compuesta por once libros, que se centra en la desdichada historia de Quasimodo, la gitana Esmeralda y el archidiácono Claude Frollo en el París del siglo xv. Todos sus elementos (ambientación medieval, amores imposibles, personajes marginados) hacen de la obra un modelo de los temas literarios del Romanticismo.',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Madame Bovary',
                'precio' => null,
                'imagen' => 'Madame_Bovary.jpeg',
                'descripcion' => 'Madame Bovary Es una novela del realismo escrita por Gustave Flaubert,  que provocó controversia en Francia cuando fue publicada en 1857. Emma Bovary, joven humilde atrapada en un matrimonio que no la satisface, influida por las lecturas románticas de su juventud, busca consuelo en numerosas relaciones para colmar sus deseos más íntimos, acarreando efectos devastadores.',
                'estado' => 'Activo',
            ],
            [
                'nombre' => "Le Petit Prince",
                'precio' => null,
                'imagen' => 'Le_petit_prince.jpeg',
                'descripcion' => 'Le Petit Prince (El principito) es una novela corta y la obra más famosa del escritor y aviador francés Antoine de Saint-Exupéry (1900-1944). El principito es un cuento poético que viene acompañado de ilustraciones hechas con acuarelas por el mismo autor.​ En él, un piloto se encuentra perdido en el desierto del Sahara después de que su avión sufriera una avería, pero para su sorpresa, es allí donde conoce a un pequeño príncipe proveniente de otro planeta. La historia tiene una temática filosófica, donde se incluyen críticas sociales dirigidas a la «extrañeza» con la que los adultos ven las cosas.',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Diccionario pocket francés',
                'precio' => null,
                'imagen' => 'diccionario_pocket_francés.jpeg',
                'descripcion' => 'Transcripción fonética de las palabras en francés y Suplemento de pronunciación y ortografía.',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Histories pour les petits',
                'precio' => null,
                'imagen' => 'Histories_pour_les_petits.jpeg',
                'descripcion' => 'Libro de historias para niños pequeños en francés.',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Matieu Le roi des bonbons',
                'precio' => null,
                'imagen' => 'Matieu_Le_roi_des_bonbons.jpeg',
                'descripcion' => 'Pero ¿qué cree Mathieu? ¿Que puede comprar chicas con dulces? ¡Oh, no! De ninguna manera !" Un libro que trata de un chico llamado Mathieu que quiere comprar a las chicas con dulces.',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Audrey veut toujours commander',
                'precio' => null,
                'imagen' => 'Audrey_veut_toujours_commander.jpeg',
                'descripcion' => 'En el recreo, Audrey cree que puede dar órdenes a todos. ¡Pero ya hemos tenido suficiente! El libro trata sobre una niña llamada Audrey la niña que quiere darle órdenes a todos.',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Téo et les animauxs sauvages',
                'precio' => null,
                'imagen' => 'Téo_et_les_animauxs_sauvages.jpeg',
                'descripcion' => 'En el libro de Théo nos encontramos con crías de animales y una gran pregunta: ¿cómo eran estos antes?',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Piccolo Saxo',
                'precio' => null,
                'imagen' => 'Piccolo_Saxo.jpeg',
                'descripcion' => 'TUna colección de instrumentos de viento y de cuerda se unen para formar una gran orquesta sinfónica, y tienen la misión de detener a un doctor malvado que se robó algunos instrumentos y notas musicales.',
                'estado' => 'Activo',
            ],
            [
                'nombre' => 'Je lis avec les animaux de la nuit',
                'precio' => null,
                'imagen' => 'Je_lis_avec_les_animaux_de_la_nuit.jpeg',
                'descripcion' => '¿Cómo ve el búho por la noche? ¿Qué es una luciérnaga? el libro responderá a todas las preguntas que los niños tengan sobre el fascinante mundo de los animales nocturnos, su estilo de vida y sus características físicas.',
                'estado' => 'Activo',
            ],
        ]);
    }
}
