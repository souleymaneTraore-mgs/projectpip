<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sourcedepense;

class surcedepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return sourcedepense::all();
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

        'code_source_dep'=>'required',
        'identifiant_dep'=>'required'

        ]);

        return sourcedepense::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return sourcedepense::find($id);
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
        $source_dep =sourcedepense::find($id);
        $source_dep->update($request->all());

        return $source_dep;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return sourcedepense::destroy($id);
    }


    /**
     * Search for a source_depnse.
     *
     * @param  string  $sourcedep
     * @return \Illuminate\Http\Response
     */

    public function search($sourcedep)
    {
        return sourcedepense::where('identifiant_dep','like','%'.$sourcedep.'%')->get();
    }




}
