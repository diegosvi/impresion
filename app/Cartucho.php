<?php namespace Impresion;

use Illuminate\Database\Eloquent\Model;

class Cartucho extends Model {

	protected $table = 'cartuchos';

	protected $fillable = [
		'modelocartucho_id','codigointerno','contadorinicialrecarga','fechacompra','numerofactura','estado','observacion'
	];

	public function modelocartucho(){

		return $this-> belongsTo('Impresion\ModeloCartucho');
	}

	public function asignacioncartuchos()
	{
		return $this->hasMany('Impresion\AsignacionCartucho');
	}

	public function scopeDetalle($query, $codigointerno)
	{
		if(trim($codigointerno) != "")
		{
			$query->where (\DB::raw("CONCAT(codigointerno,' ')"), "LIKE", "%$codigointerno%");
		}

	}

}
