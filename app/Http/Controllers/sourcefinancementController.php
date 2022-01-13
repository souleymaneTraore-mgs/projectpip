<?php

namespace App\Http\Controllers;
use App\Models\sourcefinancement;
use Illuminate\Http\Request;

class sourcefinancementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return sourcefinancement::all();

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

            'code_sourcefin'=>'required',
            'identifiant_source'=>'required'

        ]);

        return sourcefinancement::create($request->all());
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        return sourcefinancement::find($id);
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
        $sourcefin = sourcefinancement::find($id);
        $sourcefin->update($request->all());
        return $sourcefin;
    }



     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
        return sourcefinancement::destroy($id);
     }





    /**
     * Search for a sourcefinance.
     *
     * @param  string  $sourcefin
     * @return \Illuminate\Http\Response
     */

    public function search($sourcefin)
    {
        return sourcefinancement::where('identifiant_source','like','%'.$sourcefin.'%')->get();

    }




}
