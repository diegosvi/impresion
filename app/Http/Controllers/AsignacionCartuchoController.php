<?php namespace Impresion\Http\Controllers;

use Illuminate\Http\Request;
use Impresion\Http\Requests;
use Impresion\Http\Requests\CreateAsignacionCartuchoRequest;
use Impresion\Http\Requests\EditarAsignacionCartuchoRequest;
use Impresion\Http\Controllers\Controller;

use Impresion\AsignacionCartucho;

class AsignacionCartuchoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$asignacioncartuchos = AsignacionCartucho::get();
		return view ('asignacioncartuchos.index')->with('asignacioncartuchos', $asignacioncartuchos);
		/**$asignacioncartuchos = AsignacionCartucho::orderBy('fechaasignacion', 'asc')->paginate();
		return view ('asignacioncartuchos.index', compact('asignacioncartuchos'));**/
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('asignacioncartuchos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateAsignacionCartuchoRequest $request)
	{
		/**$asignacioncartucho = AsignacionCartucho::create($request-> all());

		return redirect('asignacioncartuchos');**/
		$asignacioncartuchos = AsignacionCartucho::create($request->all());
		return redirect()->route('asignacioncartuchos.index');
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
		$asignacioncartuchos = AsignacionCartucho::find($id);
		return view ('asignacioncartuchos.edit')->with('asignacioncartuchos', $asignacioncartuchos);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarAsignacionCartuchoRequest $request, $id)
	{
		$asignacioncartuchos = AsignacionCartucho::find($id);
		$asignacioncartuchos -> fill($request->all());
		$asignacioncartuchos ->save();
		return redirect() ->route('asignacioncartuchos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$asignacioncartuchos = AsignacionCartucho::find($id);
		$asignacioncartuchos->delete();
		AsignacionCartucho::destroy($id);
		return redirect ()->route('asignacioncartuchos.index');
	}

}
