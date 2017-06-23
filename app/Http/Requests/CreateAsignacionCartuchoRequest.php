<?php namespace Impresion\Http\Requests;

use Impresion\Http\Requests\Request;

class CreateAsignacionCartuchoRequest extends Request {

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
			'cartucho_id' => 'required',
			'fechaasignacion' => 'required'
		];
	}

}
