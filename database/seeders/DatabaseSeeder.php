<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Database;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Database::create([
            'nombre' => 'mindef',
            'estado' => true,
            'servidor' => '192.168.20.30',
            'gestor' => 'PostgreSql',
        ]);

        Database::create([
            'nombre' => 'siscoembex',
            'estado' => false,
            'servidor' => '192.168.20.40',
            'gestor' => 'PostgreSql',
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
