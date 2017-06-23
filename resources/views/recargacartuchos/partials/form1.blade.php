<h1 class="text-primary">Control Recarga Cartucho</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">ID CARTUCHO</th>
        <th class="text-center">NUMERO RECARGA</th>
        <th class="text-center">FECHA INICIO RECARGA</th>
        <th class="text-center">FECHA FIN RECARGA</th>
        <th class="text-center">CONTADOR INICIO RECARGA</th>
        <th class="text-center">CONTADOR FIN RECARGA</th>
        <th class="text-center">DIFERENCIA RECARGA</th>
        <th class="text-center">OBSERVACION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($recargacartuchos as $recargacartucho)
        <tr>
            <td class="text-center">{{ $recargacartucho->id }}</td>
            <td class="text-center">{{ $recargacartucho->cartucho_id }}</td>
            <td class="text-center">{{ $recargacartucho->numerorecarga }}</td>
            <td class="text-center">{{ $recargacartucho->fechainiciorecarga }}</td>
            <td class="text-center">{{ $recargacartucho->fechafinrecarga }}</td>
            <td class="text-center">{{ $recargacartucho->contadoriniciorecarga }}</td>
            <td class="text-center">{{ $recargacartucho->contadorfinrecarga }}</td>
            <td class="text-center">{{ $recargacartucho->difcontinifinrecarga }}</td>
            <td class="text-center">{{ $recargacartucho->observacion }}</td>
        <td class="text-center">{{ $recargacartucho->created_at }}</td>

        {!! Form::open(['route' => ['recargacartuchos.destroy', $recargacartucho->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url('/recargacartuchos/'.$recargacartucho->id.'/edit') }}" class="btn btn-info btn-xs">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>

        {!! Form::close() !!}

        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">ID CARTUCHO</th>
        <th class="text-center">NUMERO RECARGA</th>
        <th class="text-center">FECHA INICIO RECARGA</th>
        <th class="text-center">FECHA FIN RECARGA</th>
        <th class="text-center">CONTADOR INICIO RECARGA</th>
        <th class="text-center">CONTADOR FIN RECARGA</th>
        <th class="text-center">DIFERENCIA RECARGA</th>
        <th class="text-center">OBSERVACION</th>
    </tr>
  </tfoot>
</table>
