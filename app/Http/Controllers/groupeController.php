<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\groupe;

class groupeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return groupe::all();
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

            'codegroupe'=>'required',
            'libellegroupe'=>'required'

        ]);

        return groupe::create($request->al())->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return groupe::find($id);
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
        $grp =groupe::find($id);
        $grp->update($request->all());
        return $grp;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)

    {
        return groupe::destroy($id);
    }


     /**
     * Search for a budget
     *
     * @param  string  $group
     * @return \Illuminate\Http\Response
     */

     public function search($group)
    {
        return mission::where('libellegroupe','like','%'.$group.'%')->get();
    }

}
