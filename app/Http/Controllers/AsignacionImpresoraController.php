<?php namespace Impresion\Http\Controllers;

use Illuminate\Http\Request;
use Impresion\Http\Requests;
use Impresion\Http\Requests\CreateAsignacionImpresoraRequest;
use Impresion\Http\Requests\EditarAsignacionImpresoraRequest;
use Impresion\Http\Controllers\Controller;

use Impresion\AsignacionImpresora;

class AsignacionImpresoraController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$asignacionimpresoras = AsignacionImpresora::get();
		return view ('asignacionimpresoras.index')->with('asignacionimpresoras', $asignacionimpresoras);
		/**
		$asignacionimpresoras = AsignacionImpresora::orderBy('fechaasignacion', 'asc')->paginate();
		return view ('asignacionimpresoras.index', compact('asignacionimpresoras'));**/
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('asignacionimpresoras.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateAsignacionImpresoraRequest $request)
	{
		$asignacionimpresoras = AsignacionImpresora::create($request->all());
		return redirect()->route('asignacionimpresoras.index');
		/**
		$asignacionimpresora = AsignacionImpresora::create($request-> all());

		return redirect('asignacionimpresoras');**/
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
		$asignacionimpresoras = AsignacionImpresora::find($id);
		return view ('asignacionimpresoras.edit')->with('asignacionimpresoras', $asignacionimpresoras);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarAsignacionImpresoraRequest $request, $id)
	{
		$asignacionimpresoras = AsignacionImpresora::find($id);
		$asignacionimpresoras -> fill($request->all());
		$asignacionimpresoras ->save();
		return redirect() ->route('asignacionimpresoras.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$asignacionimpresoras = AsignacionImpresora::find($id);
		$asignacionimpresoras->delete();
		AsignacionImpresora::destroy($id);
		return redirect ()->route('asignacionimpresoras.index');
	}

}
