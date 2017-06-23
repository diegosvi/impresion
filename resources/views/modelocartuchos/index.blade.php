@extends('app')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/modelocartuchos/create') }}" role="button">Nuevo Modelo Cartucho</a>
    @include('modelocartuchos.partials.form1')
@endsection