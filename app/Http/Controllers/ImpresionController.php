<?php namespace Impresion\Http\Controllers;

use Impresion\Http\Requests;
use Impresion\Http\Controllers\Controller;
use Impresion\Http\Requests\CreateImpresionRequest;
use Impresion\Http\Requests\EditarImpresionRequest;
use Impresion\Impresion;
use Illuminate\Http\Request;

class ImpresionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$impresions = Impresion::get();
		return view('impresions.index')->with ('impresions', $impresions);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('impresions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateImpresionRequest $request)
	{
		$impresions = Impresion::create($request->all());
		return redirect()->route('impresions.index');
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
		$impresions = Impresion::find($id);
		return view ('impresions.edit')->with('impresions', $impresions);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarImpresionRequest $request, $id)
	{
		$impresions = Impresion::find($id);
		$impresions -> fill($request->all());
		$impresions ->save();
		return redirect() ->route('impresions.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$impresions = Impresion::find($id);
		$impresions->delete();
		Impresion::destroy($id);
		return redirect ()->route('impresions.index');
	}
}
