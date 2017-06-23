<?php namespace Impresion\Http\Controllers;

use Illuminate\Http\Request;
use Impresion\Http\Requests;
use Impresion\Http\Requests\CreateOficinaRequest;
use Impresion\Http\Requests\EditarOficinaRequest;
use Impresion\Http\Controllers\Controller;

use Impresion\Oficina;


class OficinaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$oficinas = Oficina::detalle($request->get('detalle'))->orderBy('id', 'DESC')->paginate();
		return view ('oficinas.index')->with('oficinas', $oficinas);
		/**$oficinas = Oficina::orderBy('detalle', 'asc')->paginate();
		return view ('oficinas.index', compact('oficinas'));**/
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('oficinas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateOficinaRequest $request)
	{
		$oficinas = Oficina::create($request->all());
		return redirect()->route('oficinas.index');
		/**$oficina = Oficina::create($request-> all());

		return redirect('oficinas');**/
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
		$oficinas = Oficina::find($id);
		return view ('oficinas.edit')->with('oficinas', $oficinas);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarOficinaRequest $request, $id)
	{
		$oficinas = Oficina::find($id);
		$oficinas -> fill($request->all());
		$oficinas ->save();
		return redirect() ->route('oficinas.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$oficinas = Oficina::find($id);
		$oficinas->delete();
		Oficina::destroy($id);
		return redirect ()->route('oficinas.index');
	}

}
