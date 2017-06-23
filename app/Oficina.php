<?php namespace Impresion;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model {

	protected $table = 'oficinas';

	protected $fillable = [
		'detalle'
	];
	
	public function asignacionimpresoras()
	{
		return $this->hasMany('Impresion\AsignacionImpresora');
	}

	public function scopeDetalle($query, $detalle)
	{
		if(trim($detalle) != "")
		{
			$query->where (\DB::raw("CONCAT(detalle,' ')"), "LIKE", "%$detalle%");
		}

	}

}
