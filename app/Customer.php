<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'clientes';
    protected $primary_key = 'id';
    protected $fillable = ['nombre',
	'apellido',
	'direccion',
	'telefono',
	'dni'];

    public $timestamps = false;
}
