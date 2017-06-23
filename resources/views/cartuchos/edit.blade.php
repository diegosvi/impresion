@extends('app')

@section('content')
    <h4 class="text-center">Editar  Impresoras: {{ $cartuchos->detalle  }}</h4>
    {!! Form::model($cartuchos, [ 'route' => ['cartuchos.update', $cartuchos], 'method' => 'PUT']) !!}
        @include('cartuchos.partials.form')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection