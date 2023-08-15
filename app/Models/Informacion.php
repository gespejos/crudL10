<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Informacion;

class Informacion extends Model
{
    use HasFactory;
}

$informacionCount = Informacion::count();

if ($informacionCount > 0) {
    // Hay datos en la tabla "informacions"
    // Puedes realizar acciones adicionales aquí
} else {
    // No hay datos en la tabla "informacions"
    // Puedes mostrar un mensaje o realizar acciones alternativas
}