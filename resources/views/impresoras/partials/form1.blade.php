<h1 class="text-primary">Control Registro Impresoras</h1>

{!!Form::open(['route' => 'impresoras.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
  <div class="form-group">
    {!!Form::text('detalle', null, ['class' => 'form-control', 'placeholder' => 'Detalle'])!!}
  </div>
  <button type="submit" class="btn btn-default">BUSCAR</button>
{!! Form::close() !!}
<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">ID MODELO IMPRESORA</th>
        <th class="text-center">NUMERO SERIE</th>
        <th class="text-center">IP IMPRESORA</th>
        <th class="text-center">MAC IMPRESORA</th>
        <th class="text-center">FECHA COMPRA</th>
        <th class="text-center">NUMERO FACTURA</th>
        <th class="text-center">ESTADO</th>
        <th class="text-center">OBSERVACION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($impresoras as $impresora)
        <tr>
            <td class="text-center">{{ $impresora->id }}</td>
            <td class="text-center">{{ $impresora->modeloimpresora_id }}</td>
            <td class="text-center">{{ $impresora->numeroserie }}</td>
            <td class="text-center">{{ $impresora->ipimpresora }}</td>
            <td class="text-center">{{ $impresora->macimpresora }}</td>
            <td class="text-center">{{ $impresora->fechacompra }}</td>
            <td class="text-center">{{ $impresora->numerofactura }}</td>
            <td class="text-center">{{ $impresora->estado }}</td>
            <td class="text-center">{{ $impresora->observacion }}</td>
        <td class="text-center">{{ $impresora->created_at }}</td>

        {!! Form::open(['route' => ['impresoras.destroy', $impresora->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url('/impresoras/'.$impresora->id.'/edit') }}" class="btn btn-info btn-xs">
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
        <th class="text-center">ID MODELO IMPRESORA</th>
        <th class="text-center">NUMERO SERIE</th>
        <th class="text-center">IP IMPRESORA</th>
        <th class="text-center">MAC IMPRESORA</th>
        <th class="text-center">FECHA COMPRA</th>
        <th class="text-center">NUMERO FACTURA</th>
        <th class="text-center">ESTADO</th>
        <th class="text-center">OBSERVACION</th>
    </tr>
  </tfoot>
</table>