<H1>RECARGA CARTUCHO</H1>
<div class="col-sm-6">
	
	<div class="form-group">
    	{!! Form::label('cartucho_id', 'ID CARTUCHO', ['for' => 'cartucho_id'] ) !!}
    	{!! Form::text('cartucho_id', null , ['class' => 'form-control', 'id' => 'cartucho_id', 'placeholder' => 'Escribe el id de cartucho...' ]  ) !!}
		@if($errors->has('cartucho_id'))
			<p class="text-danger">{{ $errors->first('cartucho_id') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('numerorecarga', 'NUMERO RECARGA', ['for' => 'numerorecarga'] ) !!}
    	{!! Form::text('numerorecarga', null , ['class' => 'form-control', 'id' => 'numerorecarga', 'placeholder' => 'Escribe el numero de recarga...' ]  ) !!}
		@if($errors->has('numerorecarga'))
			<p class="text-danger">{{ $errors->first('numerorecarga') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('fechainiciorecarga', 'FECHA INICIO RECARGA', ['for' => 'fechainiciorecarga'] ) !!}
    	{!! Form::text('fechainiciorecarga', null , ['class' => 'form-control', 'id' => 'fechainiciorecarga', 'placeholder' => 'Escribe la fecha de inicio recarga...' ]  ) !!}
		@if($errors->has('fechainiciorecarga'))
			<p class="text-danger">{{ $errors->first('fechainiciorecarga') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('fechafinrecarga', 'FECHA FIN RECARGA', ['for' => 'fechafinrecarga'] ) !!}
    	{!! Form::text('fechafinrecarga', null , ['class' => 'form-control', 'id' => 'fechafinrecarga', 'placeholder' => 'Escribe la fecha fin de recarga...' ]  ) !!}
		@if($errors->has('fechafinrecarga'))
			<p class="text-danger">{{ $errors->first('fechafinrecarga') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('contadoriniciorecarga', 'CONTADOR INICIO RECARGA', ['for' => 'contadoriniciorecarga'] ) !!}
    	{!! Form::text('contadoriniciorecarga', null , ['class' => 'form-control', 'id' => 'contadoriniciorecarga', 'placeholder' => 'Escribe el contador inico recarga...' ]  ) !!}
		@if($errors->has('contadoriniciorecarga'))
			<p class="text-danger">{{ $errors->first('contadoriniciorecarga') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('contadorfinrecarga', 'CONTADOR FIN RECARGA', ['for' => 'contadorfinrecarga'] ) !!}
    	{!! Form::text('contadorfinrecarga', null , ['class' => 'form-control', 'id' => 'contadorfinrecarga', 'placeholder' => 'Escribe el contador fin recarga...' ]  ) !!}
		@if($errors->has('contadorfinrecarga'))
			<p class="text-danger">{{ $errors->first('contadorfinrecarga') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('difcontinifinrecarga', 'DIFERENCIA CONTADOR INICIO FIN RECARGA', ['for' => 'difcontinifinrecarga'] ) !!}
    	{!! Form::text('difcontinifinrecarga', null , ['class' => 'form-control', 'id' => 'difcontinifinrecarga', 'placeholder' => 'diferencia de contador recarga...' ]  ) !!}
		@if($errors->has('difcontinifinrecarga'))
			<p class="text-danger">{{ $errors->first('difcontinifinrecarga') }}</p>
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
