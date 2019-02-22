<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'inventario';
    protected $primary_key = 'id';
    protected $fillable = ['tipo',
	'marca',
	'modelo',
	'precio',
	'activo'];

    public $timestamps = false;
}
