@extends('app')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/cartuchos/create') }}" role="button">Nuevo Cartucho</a>
    @include('cartuchos.partials.form1')
@endsection
