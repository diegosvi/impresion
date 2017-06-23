<h1>MODELO IMPRESORAS</h1>
<div class="col-sm-6">
	
	<div class="form-group">
	    {!! Form::label('detalle', 'Detalle', ['for' => 'detalle'] ) !!}
	    {!! Form::text('detalle', null , ['class' => 'form-control', 'id' => 'detalle', 'placeholder' => 'Escribe el detalle del Modelo Impresora...' ]  ) !!}
	</div>
		@if($errors->has('detalle'))
			<p class="text-danger">{{ $errors->first('detalle') }}</p>
		@endif
</div>

