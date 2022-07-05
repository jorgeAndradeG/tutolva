<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tolva extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    public $timestamps= true; 
    protected $table = 'tolva';
    protected $fillable = ['id_admin', 'direccion', 'hora_inicio', 'hora_fin','fecha_inicio','fecha_fin','estado'];

}
