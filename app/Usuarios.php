<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = "Usuario";
    protected $filleable = ['Nombre', 'ApellidoP', 'ApellidoM', 'Direccion','Telefono'];
}
