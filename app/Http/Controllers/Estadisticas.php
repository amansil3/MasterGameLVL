<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Estadisticas extends Controller
{
	public function Index(){
		return view("estadisticas.estadisticas");	
	}
    
}
