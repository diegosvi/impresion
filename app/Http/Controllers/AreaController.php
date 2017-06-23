<?php namespace Impresion\Http\Controllers;

use Illuminate\Http\Request;
use Impresion\Http\Requests;
use Impresion\Http\Requests\CreateAreaRequest;
use Impresion\Http\Requests\EditarAreaRequest;
use Impresion\Http\Controllers\Controller;

use Impresion\Area;

class AreaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$areas = Area::detalle($request->get('detalle'))->orderBy('id', 'DESC')->paginate();
		return view ('areas.index')->with('areas', $areas);
		//$areas = Area::orderBy('detalle', 'asc')->paginate();
		//return view ('areas.index', compact('areas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('areas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateAreaRequest $request)
	{
		//$areas = new Area;
		//$areas-> detalle = $request->input('detalle');
		//$areas save();
		//return redirect() -> route('areas.index');  
		
		$areas = Area::create($request->all());
		return redirect()->route('areas.index');

		//$area = Area::create($request-> all());

		//return redirect('areas');
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
	public function edit( $id)
	{
		$areas = Area::find($id);
		return view ('areas.edit')->with('areas', $areas);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarAreaRequest $request, $id)
	{
		$areas = Area::find($id);
		$areas -> fill($request->all());
		$areas ->save();
		return redirect() ->route('areas.index');

		//$areas = Area::find($id);
		//$areas -> detalle = $request->input('detalle');
		//$areas ->save();
		//return redirect() ->route('areas.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$areas = Area::find($id);
		$areas->delete();
		Area::destroy($id);
		return redirect ()->route('areas.index');
	}

}
