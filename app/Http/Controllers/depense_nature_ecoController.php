<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\depense_nature_eco;

class depense_nature_ecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return depense_nature_eco::all();
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

        'classe',
        'article',
        'paragraphe',
        'ligne',
        'rubrique',
        'sous_rubrique',
        'libelle_nature_eco'=>'required'
        ]);

        return depense_nature_eco::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return depense_nature_eco::find($id);
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
        $dep_nat =depense_nature_eco::find($id);
        $dep_nat= depense_nature_eco::update($request->all());
        return $dep_nat;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        depense_nature_eco::destroy($id);
    }


    /**
    *
    * @param $depnat
    * 
    * @return \Illuminate\Http\Response
    */

    public function search($depnat)
    {
        return depense_nature_eco::where('libelle_nature_eco','like','%'.$depnat.'%')->get();
    }
}
