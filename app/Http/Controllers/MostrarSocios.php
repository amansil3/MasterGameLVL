<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class MostrarSocios extends Controller
{
	public function Index(){
		$query = Customer::select('id','nombre','apellido','direccion','telefono','dni')->get();
		return view("socios.socioslist")->with('cliente', $query);
	}
    
}
