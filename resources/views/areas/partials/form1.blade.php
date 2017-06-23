<h1 class="text-primary">Control Areas</h1>

{!!Form::open(['route' => 'areas.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
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
    @foreach($areas as $area)
        <tr>
            <td class="text-center">{{ $area->id }}</td>
            <td class="text-center">{{ $area->detalle }}</td>
        <td class="text-center">{{ $area->created_at }}</td>

        {!! Form::open(['route' => ['areas.destroy', $area->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url('/areas/'.$area->id.'/edit') }}" class="btn btn-info btn-xs">
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