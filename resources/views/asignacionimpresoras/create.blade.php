@extends('app')

@section('content')
    {!! Form::open([ 'route' => 'asignacionimpresoras.store', 'method' => 'POST']) !!}
        @include('asignacionimpresoras.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection