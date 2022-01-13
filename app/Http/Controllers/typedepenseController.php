<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typedepense;

class typedepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return typedepense::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        'code_type_dep'=>'required',
        'indentifiant_type_dep'=>'required',
        'abreviation'

        ]);

        return typedepense::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return typedepense::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $typedep =typedepense::find($id);
        $typedep=typedepense::update($request->all());

        return $typedep;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return typedepense::destroy($id);
    }



    /**
    *Search for a type of depense
    *
    * @param string $typedep
    * @return \Illuminate\Http\Response
    */

    public fuction search($typedep)
    {
        return typedepense::where('indentifiant_type_dep','like','%'.$typedep.'%')->get();
    }


}
