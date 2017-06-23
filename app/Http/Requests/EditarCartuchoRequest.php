<?php namespace Impresion\Http\Requests;

use Impresion\Http\Requests\Request;

class EditarCartuchoRequest extends Request {

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
			'modelocartucho_id' => 'required',
			'codigointerno' => 'required|min:3',
			'contadorinicialrecarga' => 'required',
			'fechacompra' => 'required',
			'numerofactura' => 'required',
			'estado' => 'required',
			'observacion' => 'required'
		];
	}

}
