<?php

use Illuminate\Support\Facades\Route;
use App\Models\Usuario;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuario', function () {
    // 1. Busca o usuário com ID 1 usando Eloquent
    $usuario = Usuario::find(1);

    // 2. Verifica se encontrou e exibe os dados
    if (!$usuario) {
        return "Usuário não encontrado.";
    }

    // 3. Monta uma resposta HTML simples
    return "
        <div>
            <strong>Usuário Encontrado com Laravel</strong><br><br>
            {$usuario->id}<br>
            {$usuario->name}<br>
            {$usuario->email}<br>
        </div>
    ";
});
