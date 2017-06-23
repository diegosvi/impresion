<?php namespace Impresion\Http\Requests;

use Impresion\Http\Requests\Request;

class EditarRecargaCartuchoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'cartucho_id' => 'required',
			'numerorecarga' => 'required',
			'fechainiciorecarga' => 'required',
			'fechafinrecarga' => 'required',
			'contadoriniciorecarga' => 'required',
			'contadorfinrecarga' => 'required',
			'difcontinifinrecarga' => 'required',
			'observacion' => 'required'
		];
	}

}
