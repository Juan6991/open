<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model

{
	
    protected $table = 'places';    
    protected $fillable = ['name', 'descripcion','direccion','telefono','hora_apertura','hora_cierre'];
}
