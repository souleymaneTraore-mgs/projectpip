<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\servicegroupe;

class servicegroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return servicegroupe::all();
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

        'codeservicegroupe'=>'required',
        'libelle_servicegroupe'=>'required',
        'typeservice_id'=>'required',
        'numerogroupe_id'=>'required'
        ]);

        return servicegroupe::create($request->al())->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return servicegroupe::find($id);
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
        $servgroup =servicegroupe::find($id);
        $servgroup->update($request->all());
        return $servgroup;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)

    {
        return servicegroupe::destroy($id);
    }

     /**
     * Search for a division
     *
     * @param  string  $servgrp
     * @return \Illuminate\Http\Response
     */

     public function search($servgrp)
    {
        return servicegroupe::where('libelle_servicegroupe','like','%'.$servgrp.'%')->get();
    }
}
