@extends('app')

@section('content')
    {!! Form::open([ 'route' => 'cartuchos.store', 'method' => 'POST']) !!}
        @include('cartuchos.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection