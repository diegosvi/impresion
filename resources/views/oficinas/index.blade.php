
@extends('app')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/oficinas/create') }}" role="button">Nueva Oficina</a>
    @include('oficinas.partials.form1')
@endsection