<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\numerogroupe;

class numerogroupeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return numerogroupe::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

            'code'=>'required'

        ]);

        return numerogroupe::create($request->al())->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return numerogroupe::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $numgroup =numerogroupe::find($id);
        $numgroup->update($request->all());
        return $numgroup;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)

    {
        return numerogroupe::destroy($id);
    }


     /**
     * Search for a division
     *
     * @param  string  $ngroupe
     * @return \Illuminate\Http\Response
     */

     public function search($ngroupe)
    {
        return numerogroupe::where('codenumgroup','like','%'.$ngroupe.'%')->get();
    }
}
