<?php namespace Impresion\Http\Requests;

use Impresion\Http\Requests\Request;

class CreateImpresoraRequest extends Request {

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
			'numeroserie' => 'required|min:4|unique:impresoras,numeroserie',
			'ipimpresora' => 'required|min:4|unique:impresoras,ipimpresora',
			'macimpresora' => 'required|min:4|unique:impresoras,macimpresora',
			'fechacompra' => 'required',
			'numerofactura' => 'required',
			'estado' => 'required',
			'observacion' => 'required'


		];
	}

}
