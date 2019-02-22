@extends ('index')
    
    @section ('main')

        <table class="table table-bordered table-sm table-hover table-striped" style="text-align:center;">
            <thead class="thead-dark" style="text-align:center";>
                <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Activo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stock as $prod)
                    <tr>
                        <td> {{ $prod->tipo }} </td>
                        <td> {{ $prod->marca }} </td>
                        <td> {{ $prod->modelo }} </td>
                        <td> {{ $prod->precio }} </td>
                        <td> {{ $prod->activo }} </td>
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