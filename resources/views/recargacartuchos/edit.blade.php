@extends('app')

@section('content')
    <h4 class="text-center">Editar Recarga Cartucho: {{ $recargacartuchos->detalle  }}</h4>
    {!! Form::model($recargacartuchos, [ 'route' => ['recargacartuchos.update', $recargacartuchos], 'method' => 'PUT']) !!}
        @include('recargacartuchos.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection
