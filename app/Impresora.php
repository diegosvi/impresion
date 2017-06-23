<?php namespace Impresion;

use Illuminate\Database\Eloquent\Model;

class Impresora extends Model {

	protected $table = 'impresoras';

	protected $fillable = [
		'modeloimpresora_id','numeroserie','ipimpresora','macimpresora','fechacompra','numerofactura','estado','observacion'
	];

	public function modeloimpresora()
	{
		return $this->belongsTo('Impresion\ModeloImpresora');
	}

	public function asignacioncartuchos()
	{
		return $this->hasMany('Impresion\AsignacionCartucho');
	}

	public function asignacionimpresoras()
	{
		return $this->hasMany('Impresion\AsignacionImpresora');
	}

	public function scopeDetalle($query, $numeroserie)
	{
		if(trim($numeroserie) != "")
		{
			$query->where (\DB::raw("CONCAT(numeroserie,' ')"), "LIKE", "%$numeroserie%");
		}

	}

}
