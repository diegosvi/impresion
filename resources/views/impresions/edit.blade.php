@extends('app')

@section('content')
    <h4 class="text-center">Editar Recarga Impresion: {{ $impresions->detalle  }}</h4>
    {!! Form::model($impresions, [ 'route' => ['impresions.update', $impresions], 'method' => 'PUT']) !!}
        @include('impresions.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection
