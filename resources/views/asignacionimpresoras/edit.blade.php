@extends('app')

@section('content')
    <h4 class="text-center">Editar Asignacion Impresoras: {{ $asignacionimpresoras->detalle  }}</h4>
    {!! Form::model($asignacionimpresoras, [ 'route' => ['asignacionimpresoras.update', $asignacionimpresoras], 'method' => 'PUT']) !!}
        @include('asignacionimpresoras.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection