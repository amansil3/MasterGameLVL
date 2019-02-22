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
                            <a class="btn btn-info" href="/admin/empleados/edit/{{$trabajador->id}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button id="{{$trabajador->id}}" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-id="{{$trabajador->id}}" onclick="holis(this)">
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
                <h5 class="modal-title" id="exampleModalLabel"> Borrar </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <label id="asd"></label>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, solo arrimar el sogan</button>
                <form method="POST" action="/admin/empleados/delete">
                    @csrf
                    <input type="hidden" name="id_delete" id="idd" value="">
                    <button type="submit" class="btn btn-danger">SEEEEEEEEEEEE</button>
                <form>
              </div>
            </div>
          </div>
        </div>

        <script type="text/javascript"> 
            function holis(event){
                document.getElementById('asd').innerHTML = "Desea nenear en la boca a " + " " + event.getAttribute('data-id') + "?";
                $("#idd").val(event.getAttribute('data-id'));
            }

        </script>

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