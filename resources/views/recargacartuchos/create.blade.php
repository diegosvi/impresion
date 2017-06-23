@extends('app')

@section('content')
    {!! Form::open([ 'route' => 'recargacartuchos.store', 'method' => 'POST']) !!}
        @include('recargacartuchos.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection
