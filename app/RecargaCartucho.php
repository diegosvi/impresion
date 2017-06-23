<?php namespace Impresion;

use Illuminate\Database\Eloquent\Model;

class RecargaCartucho extends Model {

	protected $table = 'recarga_cartuchos';

	protected $fillable = [
		'cartucho_id','numerorecarga','fechainiciorecarga','fechafinrecarga','contadoriniciorecarga','contadorfinrecarga','difcontinifinrecarga','observacion'
	];

	public function cartucho()
	{
		return $this->belongsTo('Impresion\Cartucho');
	}

}
