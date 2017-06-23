<?php namespace Impresion\Http\Requests;

use Impresion\Http\Requests\Request;

class CreateImpresionRequest extends Request {

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
			'impresora_id' => 'required',
			'fechainicioimpresion' => 'required',
			'fechafinimpresion' => 'required',
			'contadorinicioimpresion' => 'required',
			'contadorfinimpresion' => 'required',
			'difconinifinimpresion' => 'required',
			'observacion' => 'required'
		];
	}

}
