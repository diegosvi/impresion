<?php namespace Impresion;

use Illuminate\Database\Eloquent\Model;

class AsignacionCartucho extends Model {

	protected $table = 'asignacion_cartuchos';

	protected $fillable = [
		'impresora_id','cartucho_id','fechaasignacion'
	];

	public function impresora()
	{
		return $this->belongsTo('Impresion\Impresora');
	}


	public function cartucho(){

		return $this-> belongsTo('Impresion\Cartucho');
	}

	
}
