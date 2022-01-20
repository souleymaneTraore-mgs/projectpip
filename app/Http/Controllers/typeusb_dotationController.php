<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typeusb_dotation;

class typeusb_dotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return typeusb_dotation::all();
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

            'code_usb_dot'=>'required',
            'libelle_usb_dot'=>'required'
        ]);

        return typeusb_dotation::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return typeusb_dotation::find($id);
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
        $usb_dot =typeusb_dotation::find($id);
        $usb_dot->update($request->all());
        return $usb_dot;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return typeusb_dotation::destroy($id);
    }


    /**
    * Search a type of dotation
    *
    * @param string $usb_dot
    * @return \Illuminate\Http\Response
    */

    public function search($usb_dot)
    {
        return typeusb_dotation::where('libelle_usb_prog','like','%'.$usb_dot.'%')->get();
    }
}
