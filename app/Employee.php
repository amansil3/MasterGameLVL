<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'empleados';
    protected $primary_key = 'id';
    protected $fillable = ['nombre',
	'apellido',
	'direccion',
	'telefono',
	'dni',
	'fecha_ingreso'];

    public $timestamps = false;
}
