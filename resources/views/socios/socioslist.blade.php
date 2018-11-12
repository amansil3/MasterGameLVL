@extends ('index')
	
	@section ('main')

        <table class="table table-bordered table-sm table-hover table-striped" style="text-align:center;">
            <thead class="thead-dark" style="text-align:center";>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cliente as $client)
                    <tr>
                        <td> {{ $client->nombre }} </td>
                        <td> {{ $client->apellido }} </td>
                        <td> {{ $client->dni }} </td>
                        <td> {{ $client->direccion }} </td>
                        <td> {{ $client->telefono }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

	@endsection

	@section ('sidebar')

        <li class="toc-entry toc-h2">
            <a href="/" style="color:#99979c">
                <i class="fa fa-home" aria-hidden="true"></i> Volver al inicio
            </a>
        </li>
    
    @endsection