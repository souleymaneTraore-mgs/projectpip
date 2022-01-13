<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recette_nature_eco;

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

class recette_nature_ecoController extends Controller
{
    public function index()
    {
        return recette_nature_eco::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
        $request ->validate([
            'classe',
            'article',
            'paragraphe',
            'ligne',
            'rubrique',
            'sous_rubrique',
            'libelle_nature_eco' =>'required'
        ]);

        return recette_nature_eco::create($request->all());
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        return recette_nature_eco::find($id);
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
        $recette_nat = recette_nature_eco::find($id);
        $recette_nat->update($request->all());
        return $recette_nat;
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




    public function destroy($id)
    {
        return recette_nature_eco::destroy($id);
    }



    /**
     * Search for a nat_eco.
     *
     * @param  string  $recette_eco
     * @return \Illuminate\Http\Response
     */

    public function search($recette_eco)

    {
        return recette_nature_eco::where('libelle_nature_eco','like','%'.$recette_eco.'%')->get();
    }




















 



    
}
