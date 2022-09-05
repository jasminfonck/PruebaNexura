<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoRol extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = "empleado_rol";
    protected $fillable = ['empleado_id','rol_id'];
}
