<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class, // Seeder de usuarios
            PostresSeeder::class, // Seeder de postres
            LibrosSeeder::class, // Seeder de libros
            BebidasSeeder::class, // Seeder de bebidas
        ]);
    }
    /**
     * Trunca las tablas en la base de datos.
     */
    protected function truncateTables(): void
    {
        // Aquí lista las tablas que deseas truncar
        $tables = ['users', 'postres', 'libros', 'bebidas'];

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
    }
}
