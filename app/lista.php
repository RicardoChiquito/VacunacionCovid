<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $table = "Lista";
    protected $filleable = ['Nombre', 'ApellidoP', 'ApellidoM', 'Vacuna', 'FechaAplicacion'];
}
