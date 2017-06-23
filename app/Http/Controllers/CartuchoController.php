<?php namespace Impresion\Http\Controllers;

use Illuminate\Http\Request;
use Impresion\Http\Requests;
use Impresion\Http\Requests\CreateCartuchoRequest;
use Impresion\Http\Requests\EditarCartuchoRequest;
use Impresion\Http\Controllers\Controller;

use Impresion\Cartucho;


class CartuchoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$cartuchos = Cartucho::detalle($request->get('detalle'))->orderBy('id', 'DESC')->paginate();
		return view ('cartuchos.index')->with('cartuchos', $cartuchos);
		/**
		$cartuchos = Cartucho::orderBy('codigointerno', 'asc')->paginate();
		return view ('cartuchos.index', compact('cartuchos'));**/
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('cartuchos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCartuchoRequest $request)
	{
		$cartuchos = Cartucho::create($request->all());
		return redirect()->route('cartuchos.index');
		/**$cartucho = Cartucho::create($request-> all());

		return redirect('cartuchos');**/
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
		$cartuchos = Cartucho::find($id);
		return view ('cartuchos.edit')->with('cartuchos', $cartuchos);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarCartuchoRequest $request,$id)
	{
		$cartuchos = Cartucho::find($id);
		$cartuchos -> fill($request->all());
		$cartuchos ->save();
		return redirect() ->route('cartuchos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cartuchos = Cartucho::find($id);
		$cartuchos->delete();
		Cartucho::destroy($id);
		return redirect ()->route('cartuchos.index');
	}

}
