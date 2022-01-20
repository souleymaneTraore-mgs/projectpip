<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\continent;

class continentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return continent::all();

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

            'code_continent'=>'required',
            'libelle_continent'=>'required'

        ]);

        return continent::create($request->all());
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        return continent::find($id);
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
        $contin= continent::find($id);
        $contin->update($request->all());
        return $contin;
    }



     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
        return continent::destroy($id);
     }





    /**
     * Search for a sourcefinance.
     *
     * @param  string  $continent
     * @return \Illuminate\Http\Response
     */

    public function search($continent)
    {
        return continent::where('libelle_continent','like','%'.$continent.'%')->get();

    }

    
}
