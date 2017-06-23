@extends('app')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/asignacioncartuchos/create') }}" role="button">Nueva Asignacion Cartucho</a>
    @include('asignacioncartuchos.partials.form1')
@endsection
