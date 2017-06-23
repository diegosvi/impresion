@extends('app')

@section('content')
    {!! Form::open([ 'route' => 'impresoras.store', 'method' => 'POST']) !!}
        @include('impresoras.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
        
    {!! Form::close() !!}

@endsection
