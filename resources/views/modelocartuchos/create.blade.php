@extends('app')

@section('content')
    {!! Form::open([ 'route' => 'modelocartuchos.store', 'method' => 'POST']) !!}
        @include('modelocartuchos.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection