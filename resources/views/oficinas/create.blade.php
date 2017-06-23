@extends('app')

@section('content')
    {!! Form::open([ 'route' => 'oficinas.store', 'method' => 'POST']) !!}
        @include('oficinas.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection