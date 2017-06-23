@extends('app')

@section('content')
    {!! Form::open([ 'route' => 'modeloimpresoras.store', 'method' => 'POST']) !!}
        @include('modeloimpresoras.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection