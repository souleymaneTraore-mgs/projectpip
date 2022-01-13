<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\naturesection;


class naturesectionController extends Controller
{
    public function index()
    {
        return naturesection::all();
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
            'code_section'=>'required',
            'nature_section'=>'required',
            'abreviation'
        ]);

        return naturesection::create($request->all());
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        return naturesection::find($id);
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
        $natsection = naturesection::find($id);
        $natsection->update($request->all());
        return $natsection;
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




    public function destroy($id)
    {
        return naturesection::destroy($id);
    }


    


    /**
     * Search for a nature section
     *
     * @param  string  $natsection
     * @return \Illuminate\Http\Response
     */

    public function search($natsection)

    {
        return recette_nature_eco::where('nature_section','like','%'.$natsection.'%')->get();
    }

}
