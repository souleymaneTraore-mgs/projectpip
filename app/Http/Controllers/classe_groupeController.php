<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classe_groupe;

class classe_groupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return classe_groupe::all();

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

        'code_grp_classe'=>'required',
        'libelle_grp_classe'=>'required',
        'groupe_id'=>'required',
        'classe_id'=>'required'

        ]);

        return classe_groupe::create($request->all());
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        return classe_groupe::find($id);
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
        $class_grp = classe_groupe::find($id);
        $class_grp->update($request->all());
        return $class_grp;
    }



     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
        return classe_groupe::destroy($id);
     }





    /**
     * Search for a sourcefinance.
     *
     * @param  string  $class_grp
     * @return \Illuminate\Http\Response
     */

    public function search($classe_grp)
    {
        return classe_groupe::where('libelle_grp_classe','like','%'.$class_grp.'%')->get();

    }

}
