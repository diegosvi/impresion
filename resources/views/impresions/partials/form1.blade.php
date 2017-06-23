<h1 class="text-primary">Control Recarga Impresion</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">ID IMPRESORA</th>
        <th class="text-center">FECHA INICIO IMPRESION</th>
        <th class="text-center">FECHA FIN IMPRESION</th>
        <th class="text-center">CONTADOR INICIO IMPRESION</th>
        <th class="text-center">CONTADOR FIN IMPRESION</th>
        <th class="text-center">DIFERENCIA IMPRESION</th>
        <th class="text-center">OBSERVACION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($impresions as $impresion)
        <tr>
            <td class="text-center">{{ $impresion->id }}</td>
            <td class="text-center">{{ $impresion->impresora_id }}</td>
            <td class="text-center">{{ $impresion->fechainicioimpresion }}</td>
            <td class="text-center">{{ $impresion->fechafinimpresion }}</td>
            <td class="text-center">{{ $impresion->contadorinicioimpresion }}</td>
            <td class="text-center">{{ $impresion->contadorfinimpresion }}</td>
            <td class="text-center">{{ $impresion->difconinifinimpresion }}</td>
            <td class="text-center">{{ $impresion->observacion }}</td>
        <td class="text-center">{{ $impresion->created_at }}</td>

        {!! Form::open(['route' => ['impresions.destroy', $impresion->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url('/impresions/'.$impresion->id.'/edit') }}" class="btn btn-info btn-xs">
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
        <th class="text-center">ID IMPRESORA</th>
        <th class="text-center">FECHA INICIO IMPRESION</th>
        <th class="text-center">FECHA FIN IMPRESION</th>
        <th class="text-center">CONTADOR INICIO IMPRESION</th>
        <th class="text-center">CONTADOR FIN IMPRESION</th>
        <th class="text-center">DIFERENCIA IMPRESION</th>
        <th class="text-center">OBSERVACION</th>
    </tr>
  </tfoot>
</table>
