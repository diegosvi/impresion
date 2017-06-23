<h1 class="text-primary">Control Asignacion Impresoras</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">ID AREA</th>
        <th class="text-center">ID OFICINA</th>
        <th class="text-center">ID IMPRESORA</th>
        <th class="text-center">FECHA ASIGNACION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($asignacionimpresoras as $asignacionimpresora)
        <tr>
            <td class="text-center">{{ $asignacionimpresora->id }}</td>
            <td class="text-center">{{ $asignacionimpresora->area_id }}</td>
            <td class="text-center">{{ $asignacionimpresora->oficina_id }}</td>
            <td class="text-center">{{ $asignacionimpresora->impresora_id }}</td>
            <td class="text-center">{{ $asignacionimpresora->fechaasignacion }}</td>
        <td class="text-center">{{ $asignacionimpresora->created_at }}</td>

        {!! Form::open(['route' => ['asignacionimpresoras.destroy', $asignacionimpresora->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url('/asignacionimpresoras/'.$asignacionimpresora->id.'/edit') }}" class="btn btn-info btn-xs">
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
        <th class="text-center">ID AREA</th>
        <th class="text-center">ID OFICINA</th>
        <th class="text-center">ID IMPRESORA</th>
        <th class="text-center">FECHA ASIGNACION</th>
    </tr>
  </tfoot>
</table>