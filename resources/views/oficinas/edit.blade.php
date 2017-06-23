@extends('app')

@section('content')
    <h4 class="text-center">Editar Oficina: {{ $oficinas->detalle  }}</h4>
    {!! Form::model($oficinas, [ 'route' => ['oficinas.update', $oficinas], 'method' => 'PUT']) !!}
        @include('oficinas.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection