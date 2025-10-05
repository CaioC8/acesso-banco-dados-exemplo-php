<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        Usuario::create([
            'name' => 'Jane Doe Laravel',
            'email' => 'jane.laravel@example.com',
        ]);
    }
}
