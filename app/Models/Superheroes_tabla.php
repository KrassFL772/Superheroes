<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superheroes_tabla extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'Nombre_Real', 'Nombre_Super', 'Fotografía', 'Información_Adnal'
      ]; 
}
