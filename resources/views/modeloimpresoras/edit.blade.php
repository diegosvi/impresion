@extends('app')

@section('content')
    <h4 class="text-center">Editar Modelo Impresora: {{ $modeloimpresoras->detalle  }}</h4>
    {!! Form::model($modeloimpresoras, [ 'route' => ['modeloimpresoras.update', $modeloimpresoras], 'method' => 'PUT']) !!}
        @include('modeloimpresoras.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection