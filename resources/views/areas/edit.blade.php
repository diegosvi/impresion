@extends('app')

@section('content')
    <h4 class="text-center">Editar Area: {{ $areas->detalle  }}</h4>
    {!! Form::model($areas, [ 'route' => ['areas.update', $areas], 'method' => 'PUT']) !!}
        @include('areas.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection