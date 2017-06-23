<H1>CARTUCHOS</H1>
<div class="col-sm-6">
	<div class="form-group">
    	{!! Form::label('modelocartucho_id', 'ID MODELO CARTUCHO', ['for' => 'modelocartucho_id'] ) !!}
    	{!! Form::text('modelocartucho_id', null , ['class' => 'form-control', 'id' => 'modelocartucho_id', 'placeholder' => 'Escribe el id modelo cartucho...' ]  ) !!}
		@if($errors->has('modelocartucho_id'))
			<p class="text-danger">{{ $errors->first('modelocartucho_id') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('codigointerno', 'CODIGO INTERNO', ['for' => 'codigointerno'] ) !!}
    	{!! Form::text('codigointerno', null , ['class' => 'form-control', 'id' => 'codigointerno', 'placeholder' => 'Escribe el codigo interno...' ]  ) !!}
		@if($errors->has('codigointerno'))
			<p class="text-danger">{{ $errors->first('codigointerno') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('contadorinicialrecarga', 'CONTADOR INICIAL RECARGA', ['for' => 'contadorinicialrecarga'] ) !!}
    	{!! Form::text('contadorinicialrecarga', null , ['class' => 'form-control', 'id' => 'contadorinicialrecarga', 'placeholder' => 'Escriba contador inicial recarga...' ]  ) !!}
		@if($errors->has('contadorinicialrecarga'))
			<p class="text-danger">{{ $errors->first('contadorinicialrecarga') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('fechacompra', 'FECHA COMPRA', ['for' => 'fechacompra'] ) !!}
    	{!! Form::text('fechacompra', null , ['class' => 'form-control', 'id' => 'fechacompra', 'placeholder' => 'Escriba la fecha de compra...' ]  ) !!}
		<!--@if($errors->has('fechacompra'))
			<p class="text-danger">{{ $errors->first('fechacompra') }}</p>
		@endif-->
	</div>
	<div class="form-group">
    	{!! Form::label('numerofactura', 'NUMERO FACTURA', ['for' => 'numerofactura'] ) !!}
    	{!! Form::text('numerofactura', null , ['class' => 'form-control', 'id' => 'numerofactura', 'placeholder' => 'Escribe el numero factura...' ]  ) !!}
		<!--@if($errors->has('numerofactura'))
			<p class="text-danger">{{ $errors->first('numerofactura') }}</p>
		@endif-->
	</div>
<!--<div class="form-group">
    	{!! Form::label('estado', 'ESTADO', ['for' => 'estado'] ) !!}
    	{!! Form::text('estado', null , ['class' => 'form-control', 'id' => 'estado', 'placeholder' => 'estado...' ]  ) !!}
		@if($errors->has('estado'))
			<p class="text-danger">{{ $errors->first('estado') }}</p>
		@endif
	</div>-->
	<div class="form-group">
    {!! Form::label('estado', 'ESTADO', ['for' => 'estado'] ) !!}
    <select name="estado" class="form-control">
        <option value="" disabled selected>Elige un estado...</option>
        <option value="asignado">Asignado</option>
        <option value="baja">Baja</option>
        <option value="recargar">Recargar</option>
    </select>
    @if($errors->has('estado'))
			<p class="text-danger">{{ $errors->first('estado') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('observacion', 'OBSERVACION', ['for' => 'observacion'] ) !!}
    	{!! Form::text('observacion', null , ['class' => 'form-control', 'id' => 'observacion', 'placeholder' => 'Escriba su observacion...' ]  ) !!}
		<!--@if($errors->has('observacion'))
			<p class="text-danger">{{ $errors->first('observacion') }}</p>
		@endif-->
	</div>

</div>
