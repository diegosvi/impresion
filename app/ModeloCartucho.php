<?php namespace Impresion;

use Illuminate\Database\Eloquent\Model;
use Impresion\ModeloCartucho;

class ModeloCartucho extends Model {

	protected $table = 'modelo_cartuchos';

	protected $fillable = [
		'detalle'
	];

	public function cartuchos()
	{
		return $this->hasMany('Impresion\Cartucho');
	}
	
	public function scopeDetalle($query, $detalle)
	{
		if(trim($detalle) != "")
		{
			$query->where (\DB::raw("CONCAT(detalle,' ')"), "LIKE", "%$detalle%");
		}

	}

}
