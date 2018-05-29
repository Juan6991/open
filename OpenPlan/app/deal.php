<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deal extends Model
{
     protected $table = 'places';    
    protected $fillable = ['name', 'descripcion','direccion','telefono'];
}
