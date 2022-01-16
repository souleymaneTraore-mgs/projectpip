<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ville;

class villeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ville::all();

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

            'code_ville'=>'required',
            'libelle_ville'=>'required'

        ]);

        return ville::create($request->all());
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        return ville::find($id);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




    public function update(Request $request $id)
    {
        $minist = ville::find($id);
        $minist>update($request->all());
        return $minist;
    }



     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
        return ville::destroy($id);
     }





    /**
     * Search for a sourcefinance.
     *
     * @param  string  $vil
     * @return \Illuminate\Http\Response
     */

    public function search($vil)
    {
        return ville::where('libelle_ville','like','%'.$vil.'%')->get();

    }


}
