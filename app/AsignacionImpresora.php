<?php namespace Impresion;

use Illuminate\Database\Eloquent\Model;

class AsignacionImpresora extends Model {

	protected $table = 'asignacion_impresoras';

	protected $fillable = [
		'area_id','oficina_id','impresora_id','fechaasignacion'
	];

	public function area()
	{
		return $this->belongsTo('Impresion\Area');
	}


	public function oficina(){

		return $this-> belongsTo('Impresion\Oficina');
	}

	public function impresora()
	{
		return $this->belongsTo('Impresion\Impresora');
	}
}
