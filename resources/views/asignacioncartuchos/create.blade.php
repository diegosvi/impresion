@extends('app')

@section('content')
    {!! Form::open([ 'route' => 'asignacioncartuchos.store', 'method' => 'POST']) !!}
        @include('asignacioncartuchos.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection