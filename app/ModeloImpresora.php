<?php namespace Impresion;

use Illuminate\Database\Eloquent\Model;
use Impresion\ModeloImpresora;

class ModeloImpresora extends Model {

	protected $table = 'modelo_impresoras';

	protected $fillable = [
		'detalle'
	];

	public function impresoras()
	{
		return $this->hasMany('Impresion\Impresora');
	}

	public function scopeDetalle($query, $detalle)
	{
		if(trim($detalle) != "")
		{
			$query->where (\DB::raw("CONCAT(detalle,' ')"), "LIKE", "%$detalle%");
		}

	}

}
