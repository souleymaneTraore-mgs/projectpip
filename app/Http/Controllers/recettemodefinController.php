<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recette_mode_fin;

class recettemodefinController extends Controller
{
    public function index()
    {
        return recette_mode_fin::all();
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

        'codefin'=>'required',
        'libellefin'=>'required',
        'sourcefinancement_id'=>'required',
        'typefinancement_id'=>'required'
        ]);

        return recette_mode_fin::create($request->all());
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        return recette_mode_fin::find($id);
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
        $recette_modfin = recette_mode_fin::find($id);
        $recette_modfin->update($request->all());
        return $recette_modfin;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        return recette_mode_fin::destroy($id);
    }

    /**
     * Search for a nat_eco.
     *
     * @param  string  $recette_mdin
     * @return \Illuminate\Http\Response
     */

    public function search($recette_mdin)

    {
        return recette_mode_fin::where('libellefin','like','%'.$recette_mdin.'%')->get();
    }
}
