@extends ('index')

	@section ('main')

		Datos:

		{{$empleado->id}}
		{{$empleado->nombre}}
		{{$empleado->apellido}}
		{{$empleado->direccion}}
		{{$empleado->dni}}
		{{$empleado->fecha_ingreso}}

		<a href ="/admin/empleados"> Volver </a>

	@endsection