@extends('app')

@section('content')
    <h4 class="text-center">Editar Modelo Cartucho: {{ $modelocartuchos->nombre  }}</h4>
    {!! Form::model($modelocartuchos, [ 'route' => ['modelocartuchos.update', $modelocartuchos], 'method' => 'PUT']) !!}
        @include('modelocartuchos.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection