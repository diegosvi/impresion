<?php namespace Impresion\Http\Controllers;

use Illuminate\Http\Request;
use Impresion\Http\Requests;
use Impresion\Http\Requests\CreateModeloCartuchoRequest;
use Impresion\Http\Requests\EditarModeloCartuchoRequest;
use Impresion\Http\Controllers\Controller;

use Impresion\ModeloCartucho;

class ModeloCartuchoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$modelocartuchos = ModeloCartucho::detalle($request->get('detalle'))->orderBy('id', 'DESC')->paginate();
		return view ('modelocartuchos.index')->with('modelocartuchos', $modelocartuchos);
		/**$modelocartuchos = ModeloCartucho::orderBy('detalle', 'asc')->paginate();
		return view ('modelocartuchos.index', compact('modelocartuchos'));**/
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('modelocartuchos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateModeloCartuchoRequest $request)
	{
		$modelocartuchos = ModeloCartucho::create($request->all());
		return redirect()->route('modelocartuchos.index');
		/**$modelocartucho = ModeloCartucho::create($request-> all());

		return redirect('modelocartuchos');**/
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
		$modelocartuchos = ModeloCartucho::find($id);
		return view ('modelocartuchos.edit')->with('modelocartuchos', $modelocartuchos);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarModeloCartuchoRequest $request, $id)
	{
		$modelocartuchos = ModeloCartucho::find($id);
		$modelocartuchos -> fill($request->all());
		$modelocartuchos ->save();
		return redirect() ->route('modelocartuchos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$modelocartuchos = ModeloCartucho::find($id);
		$modelocartuchos->delete();
		ModeloCartucho::destroy($id);
		return redirect ()->route('modelocartuchos.index');
	}

}
