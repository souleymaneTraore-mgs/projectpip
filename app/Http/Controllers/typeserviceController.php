<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typeservice;

class typeserviceController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return typeservice::all();
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

        'codetypeservice'=>'required',
        'libelletypeservice'=>'required'
        ]);

        return typeservice::create($request->al())->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return typeservice::find($id);
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
        $typeserv = typeservice::find($id);
        $typeserv->update($request->all());
        return $typeserv;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)

    {
        return typeservice::destroy($id);
    }

     /**
     * Search for a division
     *
     * @param  string  $typeserv
     * @return \Illuminate\Http\Response
     */

     public function search($typeserv)
    {
        return typeservice::where('libelletypeservice','like','%'.$typeserv.'%')->get();
    }
}
