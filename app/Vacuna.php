<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
    protected $table = "Vacuna";
    protected $filleable = ['Nombre','Fecha_Llegada',];
}
