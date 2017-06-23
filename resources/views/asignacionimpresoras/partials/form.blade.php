<h1>ASIGNACION IMPRESORAS</h1>
<div class="col-sm-6">
	
	<div class="form-group">
    	{!! Form::label('area_id', 'ID AREA', ['for' => 'area_id'] ) !!}
    	{!! Form::text('area_id', null , ['class' => 'form-control', 'id' => 'area_id', 'placeholder' => 'Escribe la id area...' ]  ) !!}
		@if($errors->has('area_id'))
			<p class="text-danger">{{ $errors->first('area_id') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('oficina_id', 'ID OFICINA', ['for' => 'oficina_id'] ) !!}
    	{!! Form::text('oficina_id', null , ['class' => 'form-control', 'id' => 'oficina_id', 'placeholder' => 'Escribe la id oficina...' ]  ) !!}
		@if($errors->has('oficina_id'))
			<p class="text-danger">{{ $errors->first('oficina_id') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('impresora_id', 'ID IMPRESORA', ['for' => 'impresora_id'] ) !!}
    	{!! Form::text('impresora_id', null , ['class' => 'form-control', 'id' => 'impresora_id', 'placeholder' => 'Escribe la id impresora...' ]  ) !!}
		@if($errors->has('impresora_id'))
			<p class="text-danger">{{ $errors->first('impresora_id') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('fechaasignacion', 'FECHA ASIGNACION', ['for' => 'fechaasignacion'] ) !!}
    	{!! Form::text('fechaasignacion', null , ['class' => 'form-control', 'id' => 'fechaasignacion', 'placeholder' => 'Escribe la fecha de asignacion...' ]  ) !!}
		@if($errors->has('fechaasignacion'))
			<p class="text-danger">{{ $errors->first('fechaasignacion') }}</p>
		@endif
	</div>
</div>
