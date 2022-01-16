<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ministere;

class ministereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ministere::all();

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

            'code_ministere'=>'required',
            'ilbelle_ministere'=>'required'

        ]);

        return ministere::create($request->all());
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        return ministere::find($id);
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
        $minist = ministere::find($id);
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
        return ministere::destroy($id);
     }





    /**
     * Search for a sourcefinance.
     *
     * @param  string  $minsitr
     * @return \Illuminate\Http\Response
     */

    public function search($sourcefin)
    {
        return ministere::where('identifiant_source','like','%'.$minsitr.'%')->get();

    }


}
