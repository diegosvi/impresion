@extends('app')

@section('content')
    {!! Form::open([ 'route' => 'impresions.store', 'method' => 'POST']) !!}
        @include('impresions.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection
