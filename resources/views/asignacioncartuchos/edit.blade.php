@extends('app')

@section('content')
    <h4 class="text-center">Editar Asignacion Cartuchos: {{ $asignacioncartuchos->detalle  }}</h4>
    {!! Form::model($asignacioncartuchos, [ 'route' => ['asignacioncartuchos.update', $asignacioncartuchos], 'method' => 'PUT']) !!}
        @include('asignacioncartuchos.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection