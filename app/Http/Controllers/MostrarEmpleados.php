<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class MostrarEmpleados extends Controller
{
	public function Index(){
		$query = Employee::select('id','nombre','apellido','direccion','telefono','dni','fecha_ingreso')->get();
		return view("empleados.empleadoslist")->with('empleado', $query);
	}
	public function Form(Request $request){
		return view("empleados.form");
	}
	public function EmployeeForm(Request $request){
		return $request;
	}

}
