<H1>IMPRESORAS</H1>
<div class="col-sm-6">
	
	<div class="form-group">
    	{!! Form::label('modeloimpresora_id', 'ID MODELO IMPRESORA', ['for' => 'modeloimpresora_id'] ) !!}
    	{!! Form::text('modeloimpresora_id', null , ['class' => 'form-control', 'id' => 'modeloimpresora_id', 'placeholder' => 'Escribe el id de modelo impresora...' ]  ) !!}
		@if($errors->has('modeloimpresora_id'))
			<p class="text-danger">{{ $errors->first('modeloimpresora_id') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('numeroserie', 'NUMERO SERIE', ['for' => 'numeroserie'] ) !!}
    	{!! Form::text('numeroserie', null , ['class' => 'form-control', 'id' => 'numeroserie', 'placeholder' => 'Escribe el numero de serie...' ]  ) !!}
		@if($errors->has('numeroserie'))
			<p class="text-danger">{{ $errors->first('numeroserie') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('ipimpresora', 'IP IMPRESORA', ['for' => 'ipimpresora'] ) !!}
    	{!! Form::text('ipimpresora', null , ['class' => 'form-control', 'id' => 'ipimpresora', 'placeholder' => 'Escribe la ip impresora...' ]  ) !!}
		@if($errors->has('ipimpresora'))
			<p class="text-danger">{{ $errors->first('ipimpresora') }}</p>
		@endif
	</div>
	<div class="form-group">
    	{!! Form::label('macimpresora', 'MAC IMPRESORA', ['for' => 'macimpresora'] ) !!}
    	{!! Form::text('macimpresora', null , ['class' => 'form-control', 'id' => 'macimpresora', 'placeholder' => 'Escribe la mac impresora...' ]  ) !!}
		@if($errors->has('macimpresora'))
			<p class="text-danger">{{ $errors->first('macimpresora') }}</p>
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
        <option value="disponible">Disponible</option>
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


