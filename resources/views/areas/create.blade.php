@extends('app')

@section('content')
    {!! Form::open([ 'route' => 'areas.store', 'method' => 'POST']) !!}
        @include('areas.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection