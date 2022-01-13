<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typeusb_programme;

class typeusb_programmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return typeusb_programme::all();
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

            'code_usb_prog'=>'required',
            'libelle_usb_prog'=>'required'
        ]);

        return typeusb_programme::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return typeusb_programme::find($id);
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
        $usb_prog =typeusb_programme::find($id);
        $usb_prog=typeusb_programme::update($request->all());
        return $usb_prog;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      return typeusb_programme::destroy($id);
    }



    /**
    * Search a type of programme
    *
    * @param string $usb_prog
    * @return \Illuminate\Http\Response
    */

    public function search($usb_prog)
    {
        return typeusb_programme::where('libelle_usb_prog','like','%'.$usb_prog.'%')->get();
    }
}
