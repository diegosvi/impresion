<?php namespace Impresion\Http\Controllers;

use Illuminate\Http\Request;
use Impresion\Http\Requests;
use Impresion\Http\Requests\CreateModeloImpresoraRequest;
use Impresion\Http\Requests\EditarModeloImpresoraRequest;
use Impresion\Http\Controllers\Controller;

use Impresion\ModeloImpresora;

class ModeloImpresoraController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$modeloimpresoras = ModeloImpresora::detalle($request->get('detalle'))->orderBy('id', 'DESC')->paginate();
		return view ('modeloimpresoras.index')->with('modeloimpresoras', $modeloimpresoras);
		/**$modeloimpresoras = ModeloImpresora::orderBy('detalle', 'asc')->paginate();
		return view ('modeloimpresoras.index', compact('modeloimpresoras'));**/
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('modeloimpresoras.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateModeloImpresoraRequest $request)
	{
		$modeloimpresoras = ModeloImpresora::create($request->all());
		return redirect()->route('modeloimpresoras.index');
		/**$modeloimpresora = ModeloImpresora::create($request-> all());

		return redirect('modeloimpresoras');**/
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$modeloimpresoras = ModeloImpresora::find($id);
		return view ('modeloimpresoras.edit')->with('modeloimpresoras', $modeloimpresoras);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarModeloImpresoraRequest $request, $id)
	{
		$modeloimpresoras = ModeloImpresora::find($id);
		$modeloimpresoras -> fill($request->all());
		$modeloimpresoras ->save();
		return redirect() ->route('modeloimpresoras.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$modeloimpresoras = ModeloImpresora::find($id);
		$modeloimpresoras->delete();
		ModeloImpresora::destroy($id);
		return redirect ()->route('modeloimpresoras.index');
	}

}
