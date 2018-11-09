<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Facturacion extends Controller
{
	public function Index(){
		return view("facturacion.remitoslist");	
	}
    
}
