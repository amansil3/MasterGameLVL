@extends ('index')
    
    @section ('main')

        <table class="table table-bordered table-sm table-hover table-striped" style="text-align:center;">
            <thead class="thead-dark" style="text-align:center";>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Fecha de Ingreso</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleado as $trabajador)
                    <tr>
                        <td> {{ $trabajador->nombre }} </td>
                        <td> {{ $trabajador->apellido }} </td>
                        <td> {{ $trabajador->dni }} </td>
                        <td> {{ $trabajador->direccion }} </td>
                        <td> {{ $trabajador->telefono }} </td>
                        <td> {{ $trabajador->fecha_ingreso }} </td>
                        <td>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999;">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
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
                    <input type="number" name="DNI" required min="10000000">
                </div>
                <div class="input-group">
                    <label>Fecha ingreso laboral:</label>
                    <input type="date" name="fecha" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

    @endsection

    @section ('sidebar')

        <li class="toc-entry toc-h2">
            <a href="empleados/loquesea" style="color:#99979c">
                <i class="fa fa-plus" aria-hidden="true"></i> Agregar un empleado
            </a>
        </li>
    
        <li class="toc-entry toc-h2">
            <a href="/" style="color:#99979c">
                <i class="fa fa-home" aria-hidden="true"></i> Volver al inicio
            </a>
        </li>

    @endsection