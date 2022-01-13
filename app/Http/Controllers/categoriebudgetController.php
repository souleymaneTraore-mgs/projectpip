<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoriebudget;

class categoriebudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return categoriebudget::all();
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

            'code_buget'=>'required',
            'libelle_budget'=>'required'

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return categoriebudget::find($id);
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
        $catebudget =categoriebudget::find($id);
        $catebudget->update($request->all());
        return $catebudget;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        return categoriebudget::destroy($id);
    }


     /**
     * Search for a budget
     *
     * @param  string  $budget
     * @return \Illuminate\Http\Response
     */

     public function search($budget)
    {
        return mission::where('libelle_budget','like','%'.$budget.'%')->get();
    }

}
