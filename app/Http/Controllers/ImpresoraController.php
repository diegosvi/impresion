<?php namespace Impresion\Http\Controllers;

use Illuminate\Http\Request;
use Impresion\Http\Requests;
use Impresion\Http\Requests\CreateImpresoraRequest;
use Impresion\Http\Requests\EditarImpresoraRequest;
use Impresion\Http\Controllers\Controller;

use Impresion\Impresora;
use Impresion\ModeloImpresora;


class ImpresoraController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index( Request $request)
	{

		$impresoras = Impresora::detalle($request->get('detalle'))->orderBy('id', 'DESC')->paginate();
		return view ('impresoras.index')->with('impresoras', $impresoras);
		/**$impresoras = Impresora::orderBy('numeroserie', 'asc')->paginate();
		return view ('impresoras.index', compact('impresoras'));**/
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('impresoras.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateImpresoraRequest $request)
	{
		$impresoras = Impresora::create($request->all());
		return redirect()->route('impresoras.index');
		/**$impresora = Impresora::create($request-> all());

		return redirect('impresoras');**/
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
		$impresoras = Impresora::find($id);
		return view ('impresoras.edit')->with('impresoras', $impresoras);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarImpresoraRequest $request, $id)
	{
		$impresoras = Impresora::find($id);
		$impresoras -> fill($request->all());
		$impresoras ->save();
		return redirect() ->route('impresoras.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$impresoras = Impresora::find($id);
		$impresoras->delete();
		Impresora::destroy($id);
		return redirect ()->route('impresoras.index');
	}

}
