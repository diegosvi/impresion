<?php namespace Impresion;

use Illuminate\Database\Eloquent\Model;
use Impresion\Area;

class Area extends Model {

	protected $table = 'areas';

	protected $fillable = [
		'detalle'
	];

	/**public funcion scopeDetalle ($query, $detalle)
	{
		return $query->where ('detalle', $detalle);
	}

	public funcion scopeId($query, $id){
		return $query->where ('id', $id);
	}**/

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
