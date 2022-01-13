<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typefinancement;

class typefinancementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return typefinancement::all();
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

            'codetype_fin'=>'required',
            'identifiant_type_fin'=>'required'

        ]);

        return typefinancement::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return typefinancement::find($id);
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
        $typefin=typefinancement::find($id);
        $typefin->update($request->all());
        return $typefin;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return typefinancement::destroy($id);
    }


    /**
     * Search for a source_fin.
     *
     * @param  string  $typefin
     * @return \Illuminate\Http\Response
     */


    public function search($typefin)
    
    {
        return typefinancement::where('identifiant_type_fin','like','%'.$typefin.'%')->get();

    }





}
