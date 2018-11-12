<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;

class Proveedores extends Controller
{
	public function Index(){
		$query = Provider::select('id','nombre','direccion','telefono','cuit')->get();
		return view("proveedores.proveedoreslist")->with('proveedor', $query);	
	}
    
}
