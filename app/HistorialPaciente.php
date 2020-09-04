<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialPaciente extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'descripcion', 
        'implemento', 
        'created_at', 
    ];

}
