<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\type_groupe;

class type_groupeController extends Controller
{
    
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return type_groupe::all();

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

            
        'codeType_grp' =>'required',
        'libelle_Type_grp' =>'required'

        ]);

        return type_groupe::create($request->all());
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        return type_groupe::find($id);
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
        $typeservice = type_groupe::find($id);
        $typeservice->update($request->all());
        return $typeservice;
    }



     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
        return type_groupe::destroy($id);
     }





    /**
     * Search for a sourcefinance.
     *
     * @param  string  $typgrp
     * @return \Illuminate\Http\Response
     */

    public function search($typgrp)
    {
        return type_groupe::where('libelle_Type_grp','like','%'.$classe.'%')->get();

    }


}
