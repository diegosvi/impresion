@extends('app')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/modeloimpresoras/create') }}" role="button">Nuevo Modelo Impresora</a>
    @include('modeloimpresoras.partials.form1')
@endsection