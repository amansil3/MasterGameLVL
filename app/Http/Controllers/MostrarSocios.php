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
	public function Form(Request $request){
		return view("socios.form");
	}
	public function SociosForm(Request $request){
		return $request;
	}
	public function newSocioCreate(Request $request){
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
            return redirect("/admin/socios")
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
    		'telefono',])
    	->where('id', '=', $id)
    	->first();

    	return View::make('socios.edit')->with('empleado', $employee);
    }
    public function DeleteEmployee(Request $request){
  		
  		$employee = Employee::find($request['id_delete']);

  		$employee->estado = 0;

  		$employee->save();

  		return redirect('/admin/socios');
    }
    
}
