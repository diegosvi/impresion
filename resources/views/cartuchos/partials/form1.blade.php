<h1 class="text-primary">Control Registro Cartuchos</h1>

{!!Form::open(['route' => 'cartuchos.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
  <div class="form-group">
    {!!Form::text('detalle', null, ['class' => 'form-control', 'placeholder' => 'Detalle'])!!}
  </div>
  <button type="submit" class="btn btn-default">BUSCAR</button>
{!! Form::close() !!}

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">ID MODELO CARTUCHO</th>
        <th class="text-center">CODIGO INTERNO</th>
        <th class="text-center">CONTADOR INICIAL</th>
        <th class="text-center">FECHA COMPRA</th>
        <th class="text-center">NUMERO FACTURA</th>
        <th class="text-center">ESTADO</th>
        <th class="text-center">OBSERVACION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cartuchos as $cartucho)
        <tr>
            <td class="text-center">{{ $cartucho->id }}</td>
            <td class="text-center">{{ $cartucho->modelocartucho_id }}</td>
            <td class="text-center">{{ $cartucho->codigointerno }}</td>
            <td class="text-center">{{ $cartucho->contadorinicialrecarga }}</td>
            <td class="text-center">{{ $cartucho->fechacompra }}</td>
            <td class="text-center">{{ $cartucho->numerofactura }}</td>
            <td class="text-center">{{ $cartucho->estado }}</td>
            <td class="text-center">{{ $cartucho->observacion }}</td>
        <td class="text-center">{{ $cartucho->created_at }}</td>

        {!! Form::open(['route' => ['cartuchos.destroy', $cartucho->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url('/cartuchos/'.$cartucho->id.'/edit') }}" class="btn btn-info btn-xs">
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
        <th class="text-center">ID MODELO CARTUCHO</th>
        <th class="text-center">CODIGO INTERNO</th>
        <th class="text-center">CONTADOR INICIAL</th>
        <th class="text-center">FECHA COMPRA</th>
        <th class="text-center">NUMERO FACTURA</th>
        <th class="text-center">ESTADO</th>
        <th class="text-center">OBSERVACION</th>
    </tr>
  </tfoot>
</table>