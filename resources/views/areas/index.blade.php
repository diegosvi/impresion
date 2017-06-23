
@extends('app')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/areas/create') }}" role="button">Nueva Area</a>
    @include('areas.partials.form1')
@endsection