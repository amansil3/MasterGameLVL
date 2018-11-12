<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'proveedores';
    protected $primary_key = 'id';
    protected $fillable = ['nombre',
	'direccion',
	'telefono',
	'cuit'];

    public $timestamps = false;
}
