<?php namespace Impresion\Http\Controllers;

use Impresion\Http\Requests;
use Impresion\Http\Controllers\Controller;
use Impresion\Http\Requests\CreateRecargaCartuchoRequest;
use Impresion\Http\Requests\EditarRecargaCartuchoRequest;
use Impresion\RecargaCartucho;
use Illuminate\Http\Request;

class RecargaCartuchoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$recargacartuchos = RecargaCartucho::get();
		return view('recargacartuchos.index')->with ('recargacartuchos', $recargacartuchos);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('recargacartuchos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateRecargaCartuchoRequest $request)
	{
		$recargacartuchos = RecargaCartucho::create($request->all());
		return redirect()->route('recargacartuchos.index');
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
		$recargacartuchos = RecargaCartucho::find($id);
		return view ('recargacartuchos.edit')->with('recargacartuchos', $recargacartuchos);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarRecargaCartuchoRequest $request, $id)
	{
		$recargacartuchos = RecargaCartucho::find($id);
		$recargacartuchos -> fill($request->all());
		$recargacartuchos ->save();
		return redirect() ->route('recargacartuchos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$recargacartuchos = RecargaCartucho::find($id);
		$recargacartuchos->delete();
		RecargaCartucho::destroy($id);
		return redirect ()->route('recargacartuchos.index');
	}

}
