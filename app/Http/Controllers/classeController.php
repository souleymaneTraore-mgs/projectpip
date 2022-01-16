<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classe;

class classeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return classe::all();

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

            'codeclasse'=>'required'

        ]);

        return classe::create($request->all());
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        return classe::find($id);
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
        $classe = classe::find($id);
        $classe>update($request->all());
        return $classe;
    }



     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
        return classe::destroy($id);
     }





    /**
     * Search for a sourcefinance.
     *
     * @param  string  $classe
     * @return \Illuminate\Http\Response
     */

    public function search($classe)
    {
        return classe::where('codeclasse','like','%'.$classe.'%')->get();

    }

}
