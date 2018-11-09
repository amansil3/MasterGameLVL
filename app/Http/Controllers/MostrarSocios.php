<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MostrarSocios extends Controller
{
	public function Index(){
		return view("socios.socioslist");	
	}
    
}
