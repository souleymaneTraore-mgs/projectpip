<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recette_nature_eco;

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

class DonneesController extends Controller
{
    public function index()
    {
        $recette_nat = DB::table('recette_nature_eco')
                ->select('classe', 'article','paragraphe','ligne','rubrique','sous_rubrique','libelle_nature_eco')
                ->get();

                return response()->json($recette_nat);
                
    }
}
