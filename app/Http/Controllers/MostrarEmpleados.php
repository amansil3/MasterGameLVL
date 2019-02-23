<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use DB;
use Validator;
use View;

class MostrarEmpleados extends Controller
{
	public function Index(){
		$query = 
		Employee::select('id','nombre','apellido','direccion','telefono','dni','fecha_ingreso','estado')
		->where('estado','=',1)
		->get();
		return view("empleados.empleadoslist")->with('empleado', $query);
	}
	public function Form(Request $request){
		return view("empleados.form");
	}
	public function EmployeeForm(Request $request){
		return $request;
	}
	public function newEmployeeCreate(Request $request){
		//return $request->all();
        DB::beginTransaction();
        
        try 
        {
           //Validaciones
            $validator = Validator::make($request->all(), [
                'nombre' => 'required',
                'apellido' => 'required',
                'direccion' => 'required',
                'telefono' => 'required',
                'dni' => 'required',
				'fecha_ingreso' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()
                            ->back()
                            ->withErrors($validator)
                            ->withInput();
            }


            $query = new Employee;
                $query->nombre = $request->nombre;
                $query->apellido = $request->apellido;
                $query->direccion = $request->direccion;
                $query->telefono = $request->telefono;
                $query->dni = $request->dni;
                $query->fecha_ingreso = $request->fecha_ingreso;
            $query->save();

            //Commit y redirect con success
            DB::commit();
            return redirect("/admin/empleados")
                ->with('status', 'Usuario creado correctamente');
        }

        catch (Exception $e)
        {
            //Rollback y redirect con error
            DB::rollback();
            return 'fail';
            //return redirect()
              //  ->back()
                //->withErrors('Se ha producido un error: ( ' . $e->getCode() . ' ): ' . $e->getMessage().'');
        }
    }
    public function EditEmployee($id) {
    	$employee = Employee::select([
    		'id',
    		'nombre',
    		'apellido',
    		'dni',
    		'direccion',
    		'telefono',
    		'fecha_ingreso'])
    	->where('id', '=', $id)
    	->first();

    	return View::make('empleados.edit')->with('empleado', $employee);
    }
    public function DeleteEmployee(Request $request){
  		
  		$employee = Employee::find($request['id_delete']);

  		$employee->estado = 0;

  		$employee->save();

  		return redirect('/admin/empleados');
    }

}
