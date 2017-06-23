<?php namespace Impresion\Http\Requests;

use Impresion\Http\Requests\Request;

class EditarImpresoraRequest extends Request {

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
			'modeloimpresora_id' => 'required',
			'numeroserie' => 'required|min:4',
			'ipimpresora' => 'required|min:4',
			'macimpresora' => 'required|min:4',
			'fechacompra' => 'required',
			'numerofactura' => 'required',
			'estado' => 'required',
			'observacion' => 'required'
		];
	}

}
