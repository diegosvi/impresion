@extends('app')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/recargacartuchos/create') }}" role="button">Nueva Recarga Cartucho</a>
    @include('recargacartuchos.partials.form1')
@endsection
