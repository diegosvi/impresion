<H1>MODELO CARTUCHO</H1>
<div class="col-sm-6">
	
	<div class="form-group">
	    {!! Form::label('detalle', 'Detalle', ['for' => 'detalle'] ) !!}
	    {!! Form::text('detalle', null , ['class' => 'form-control', 'id' => 'detalle', 'placeholder' => 'Escribe el detalle del Modelo Cartucho...' ]  ) !!}
	</div>
		@if($errors->has('detalle'))
			<p class="text-danger">{{ $errors->first('detalle') }}</p>
		@endif
</div>

