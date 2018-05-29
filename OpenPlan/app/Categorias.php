<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categories';    
    protected $fillable = ['id','name', 'descripcion'];

}
