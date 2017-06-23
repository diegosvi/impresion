<h1 class="text-primary">Control Oficinas</h1>

{!!Form::open(['route' => 'oficinas.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
  <div class="form-group">
    {!!Form::text('detalle', null, ['class' => 'form-control', 'placeholder' => 'Detalle'])!!}
  </div>
  <button type="submit" class="btn btn-default">BUSCAR</button>
{!! Form::close() !!}

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Detalle</th>
    </tr>
  </thead>
  <tbody>
    @foreach($oficinas as $oficina)
        <tr>
            <td class="text-center">{{ $oficina->id }}</td>
            <td class="text-center">{{ $oficina->detalle }}</td>
        <td class="text-center">{{ $oficina->created_at }}</td>

        {!! Form::open(['route' => ['oficinas.destroy', $oficina->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url('/oficinas/'.$oficina->id.'/edit') }}" class="btn btn-info btn-xs">
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
        <th class="text-center">Detalle</th>
    </tr>
  </tfoot>
</table>