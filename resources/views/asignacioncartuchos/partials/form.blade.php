<H1>ASIGNACION CARTUCHOS</H1>
<div class="col-sm-6">
	<div class="form-group">
    	{!! Form::label('impresora_id', 'ID IMPRESORA', ['for' => 'impresora_id'] ) !!}
    	{!! Form::text('impresora_id', null , ['class' => 'form-control', 'id' => 'impresora_id', 'placeholder' => 'Escribe el id impresora...' ]  ) !!}
		@if($errors->has('impresora_id'))
			<p class="text-danger">{{ $errors->first('impresora_id') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('cartucho_id', 'ID CARTUCHO', ['for' => 'cartucho_id'] ) !!}
    	{!! Form::text('cartucho_id', null , ['class' => 'form-control', 'id' => 'cartucho_id', 'placeholder' => 'Escribe el id cartucho...' ]  ) !!}
		@if($errors->has('cartucho_id'))
			<p class="text-danger">{{ $errors->first('cartucho_id') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('fechaasignacion', 'FECHA ASIGNACION', ['for' => 'fechaasignacion'] ) !!}
    	{!! Form::text('fechaasignacion', null , ['class' => 'form-control', 'id' => 'fechaasignacion', 'placeholder' => 'Escriba la fecha asignacion...' ]  ) !!}
		@if($errors->has('fechaasignacion'))
			<p class="text-danger">{{ $errors->first('fechaasignacion') }}</p>
		@endif
	</div>
</div>
