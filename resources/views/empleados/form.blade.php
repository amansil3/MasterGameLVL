@extends ('index')

	@section ('main')
		@if (session('status'))
              <div class="alert alert-success" id="ocultar">
                      {{ session('status') }}
              </div>
      @endif
		<form method="post" action="/admin/empleados/nuevo">
			@csrf
			<div class="input-group">
				<label>Nombre:</label>
				<input type="text" name="nombre" value="" required minlength="3">
			</div>
			<div class="input-group">
				<label>Apellido:</label>
				<input type="text" name="apellido" value="" required minlength="3">
			</div>
			<div class="input-group">
				<label>Teléfono:</label>
				<input type="number" name="telefono" required minlength="2000000">
			</div>
			<div class="input-group">
				<label>DNI:</label>
				<input type="number" name="dni" required min="10000000">
			</div>
			<div class="input-group">
				<label>Dirección:</label>
				<input type="text" name="direccion" required minlength="8">
			</div>
			<div class="input-group">
				<label>Fecha de Ingreso:</label>
				<input type="date" name="fecha_ingreso" required minlength="8">
			</div>

	        <a class="btn btn-secondary" href="../empleados"> Cerrar </a>
	        <button type="submit" class="btn btn-primary">Agregar empleado</button>

		</form>

	@endsection