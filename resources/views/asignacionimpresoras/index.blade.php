@extends('app')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/asignacionimpresoras/create') }}" role="button">Nueva Asignacion Impresora</a>
    @include('asignacionimpresoras.partials.form1')
@endsection
