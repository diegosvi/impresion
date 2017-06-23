<h1 class="text-primary">Control Modelo Cartuchos</h1>

{!!Form::open(['route' => 'modelocartuchos.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
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
    @foreach($modelocartuchos as $modelocartucho)
        <tr>
            <td class="text-center">{{ $modelocartucho->id }}</td>
            <td class="text-center">{{ $modelocartucho->detalle }}</td>
        <td class="text-center">{{ $modelocartucho->created_at }}</td>

        {!! Form::open(['route' => ['modelocartuchos.destroy', $modelocartucho->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url('/modelocartuchos/'.$modelocartucho->id.'/edit') }}" class="btn btn-info btn-xs">
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