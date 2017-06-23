@extends('app')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/impresions/create') }}" role="button">Nueva Recarga Impresion</a>
    @include('impresions.partials.form1')
@endsection
