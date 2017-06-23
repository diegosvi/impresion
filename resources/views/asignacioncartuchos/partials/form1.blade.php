<h1 class="text-primary">Control Asignacion Cartuchos</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">ID IMPRESORA</th>
        <th class="text-center">ID CARTUCHO</th>
        <th class="text-center">FECHA ASIGNACION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($asignacioncartuchos as $asignacioncartucho)
        <tr>
            <td class="text-center">{{ $asignacioncartucho->id }}</td>
            <td class="text-center">{{ $asignacioncartucho->impresora_id }}</td>
            <td class="text-center">{{ $asignacioncartucho->cartucho_id }}</td>
            <td class="text-center">{{ $asignacioncartucho->fechaasignacion }}</td>
        <td class="text-center">{{ $asignacioncartucho->created_at }}</td>

        {!! Form::open(['route' => ['asignacioncartuchos.destroy', $asignacioncartucho->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url('/asignacioncartuchos/'.$asignacioncartucho->id.'/edit') }}" class="btn btn-info btn-xs">
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
        <th class="text-center">ID CARTUCHO</th>
        <th class="text-center">FECHA ASIGNACION</th>
    </tr>
  </tfoot>
</table>