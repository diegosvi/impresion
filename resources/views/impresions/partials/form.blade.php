<H1>IMPRESION</H1>
<div class="col-sm-6">
	
	<div class="form-group">
    	{!! Form::label('impresora_id', 'ID IMPRESORA', ['for' => 'impresora_id'] ) !!}
    	{!! Form::text('impresora_id', null , ['class' => 'form-control', 'id' => 'impresora_id', 'placeholder' => 'Escribe el id de impresora...' ]  ) !!}
		@if($errors->has('impresora_id'))
			<p class="text-danger">{{ $errors->first('impresora_id') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('fechainicioimpresion', 'FECHA INICIO IMPRESION', ['for' => 'fechainicioimpresion'] ) !!}
    	{!! Form::text('fechainicioimpresion', null , ['class' => 'form-control', 'id' => 'fechainicioimpresion', 'placeholder' => 'Escribe la fecha de inicio impresion...' ]  ) !!}
		@if($errors->has('fechainicioimpresion'))
			<p class="text-danger">{{ $errors->first('fechainicioimpresion') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('fechafinimpresion', 'FECHA FIN IMPRESION', ['for' => 'fechafinimpresion'] ) !!}
    	{!! Form::text('fechafinimpresion', null , ['class' => 'form-control', 'id' => 'fechafinimpresion', 'placeholder' => 'Escribe la fecha fin de impresion...' ]  ) !!}
		@if($errors->has('fechafinimpresion'))
			<p class="text-danger">{{ $errors->first('fechafinimpresion') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('contadorinicioimpresion', 'CONTADOR INICIO IMPRESION', ['for' => 'contadorinicioimpresion'] ) !!}
    	{!! Form::text('contadorinicioimpresion', null , ['class' => 'form-control', 'id' => 'contadorinicioimpresion', 'placeholder' => 'Escribe el contador inico impresion...' ]  ) !!}
		@if($errors->has('contadorinicioimpresion'))
			<p class="text-danger">{{ $errors->first('contadorinicioimpresion') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('contadorfinimpresion', 'CONTADOR FIN IMPRESION', ['for' => 'contadorfinimpresion'] ) !!}
    	{!! Form::text('contadorfinimpresion', null , ['class' => 'form-control', 'id' => 'contadorfinimpresion', 'placeholder' => 'Escribe el contador fin impresion...' ]  ) !!}
		@if($errors->has('contadorfinimpresion'))
			<p class="text-danger">{{ $errors->first('contadorfinimpresion') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('difconinifinimpresion', 'DIFERENCIA CONTADOR INICIO FIN IMPRESION', ['for' => 'difconinifinimpresion'] ) !!}
    	{!! Form::text('difconinifinimpresion', null , ['class' => 'form-control', 'id' => 'difconinifinimpresion', 'placeholder' => 'diferencia de contador impresion...' ]  ) !!}
		@if($errors->has('difconinifinimpresion'))
			<p class="text-danger">{{ $errors->first('difconinifinimpresion') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('observacion', 'OBSERVACION', ['for' => 'observacion'] ) !!}
    	{!! Form::text('observacion', null , ['class' => 'form-control', 'id' => 'observacion', 'placeholder' => 'Escriba su observacion...' ]  ) !!}
		@if($errors->has('observacion'))
			<p class="text-danger">{{ $errors->first('observacion') }}</p>
		@endif
	</div>

</div>
