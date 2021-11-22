<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index(Request $request) 
	{
		$quantity = $request->input('quantity') ?? 10;
		return Division::with(['division', 'ambassador', 'divisions'])->paginate($quantity);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$request->validate([
			'name' => 'required|max:45',
			'num_collaborators' => 'required'
		]);

		return Division::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function show(Division $division)
    {
		return Division::find($division);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {

		$request->validate([
			'name' => 'required|max:45',
			'num_collaborators' => 'required'
		]);

		$division = Division::find($id);

		$division->update($request->all());
		return $division;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
		return Division::destroy($id);	
    }

	public function search(Request $request)
	{
		$query = $request->input('q');
		$column = $request->input('column') ?? 'name';
		$quantity = $request->input('quantity') ?? 10;

		if( $column == "parentDivision" ) {
			return Division::whereHas('division', function($column) use($query) {
				$column->where('name', 'like', '%'.$query.'%');
			})->with(['division', 'ambassador', 'divisions'])->paginate($quantity);
		}

		if( $column == 'ambassador' ) {
			return Division::whereHas('ambassador', function($column) use($query) {
				$column->where('name', 'like', '%'.$query.'%');
			})->with(['division', 'ambassador', 'divisions'])->paginate($quantity);
		}

		return Division::where($column, 'like', '%'.$query.'%')->with(['division', 'ambassador', 'divisions'])->paginate($quantity);
	}
}
