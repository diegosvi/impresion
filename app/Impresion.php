<?php namespace Impresion;

use Illuminate\Database\Eloquent\Model;

class Impresion extends Model {

	protected $table = 'impresions';

	protected $fillable = [
		'impresora_id','fechainicioimpresion','fechafinimpresion','contadorinicioimpresion','contadorfinimpresion','difconinifinimpresion','observacion'
	];

	public function cartucho()
	{
		return $this->belongsTo('Impresion\Impresion');
	}

}
