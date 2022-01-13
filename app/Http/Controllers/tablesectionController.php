<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tablesection;

class tablesectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tablesection::all();
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

        'codesection'=>'required',
        'libellesection'=>'required',
        'abreviation'

        ]);

        return tablesection::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return tablesection::find($id);
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
        $req=tablesection::find($id);
        $req=tablesection::update($request->all());
        return $req;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return tablesection::destroy($id);
    }


    /**
    * Search for table section
    *
    * @param string $tablesec
    * @return \Illuminate\Http\Response
    */

    public function search($tablesec)
    {
        return tablesec::where('libellesection','like','%'.$tablesec.'%')->get();
    }
}
