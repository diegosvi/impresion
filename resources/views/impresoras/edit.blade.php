@extends('app')

@section('content')
    <h4 class="text-center">Editar  Impresoras: {{ $impresoras->detalle  }}</h4>
    {!! Form::model($impresoras, [ 'route' => ['impresoras.update', $impresoras], 'method' => 'PUT']) !!}
        @include('impresoras.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection