@extends('app')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/impresoras/create') }}" role="button">Nueva Impresora</a>
    @include('impresoras.partials.form1')
@endsection
