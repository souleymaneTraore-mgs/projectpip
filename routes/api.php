<?php

use App\Http\Controllers\recette_nature_ecoController;
use App\Http\Controllers\typefinancementController;
use App\Http\Controllers\sourcefinancementController;
use App\Http\Controllers\typedepenseController;
use App\Http\Controllers\sourcedepenseController;
use App\Http\Controllers\naturesectionController;
use App\Http\Controllers\missionController;
use App\Http\Controllers\categoriebudgetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\tablesectionController;
use App\Http\Controllers\typeusb_dotationController;
use App\Http\Controllers\typeusb_programmeController;
use App\Http\Controllers\depense_nature_ecoController;
use App\Http\Controllers\groupe_serviceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




//public routes 
Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);

//nature economique
Route::get('/recette_nat_eco/search/{libelle_nature_eco}',[recette_nature_ecoController::class,'search']);

Route::get('/recette_nat_eco', [recette_nature_ecoController::class,'index']);

Route::get('/recette_nat_eco/{id}', [recette_nature_ecoController::class,'show']);

//source financement

Route::get('/sourcefin/search/{identifiant_source}',[sourcefinancementController::class,'search']);

Route::get('/sourcefin', [sourcefinancementController::class,'index']);

Route::get('/sourcefin/{id}', [sourcefinancementController::class,'show']);

//type financement

Route::get('/typefin/search/{identifiant_type_fin}',[typefinancementController::class,'search']);

Route::get('/typefin', [typefinancementController::class,'index']);

Route::get('/typefin/{id}', [typefinancementController::class,'show']);


//mission

Route::get('/mission/search/{categorie_mission}',[missionController::class,'search']);

Route::get('/mission', [missionController::class,'index']);

Route::get('/mission{id}', [missionController::class,'show']);


//Nature section

Route::get('/nature_section/search/{nature_section}',[naturesectionController::class,'search']);

Route::get('/nature_section', [naturesectionController::class,'index']);

Route::get('/nature_section/{id}', [naturesectionController::class,'show']);


//source depense

Route::get('/sourcedep/search/{identifiant_dep}',[sourcedepeseController::class,'search']);

Route::get('/sourcedep', [sourcedepeseController::class,'index']);

Route::get('/sourcedep/{id}', [sourcedepeseController::class,'show']);

//categorie budget

Route::get('/cateorie_budget/search/{identifiant_dep}',[categoriebudgetController::class,'search']);

Route::get('/categorie_budget', [categoriebudgetController::class,'index']);

Route::get('/categorie_budget/{id}', [categoriebudgetController::class,'show']);


//type de depense

Route::get('/type_dep/search/{indentifiant_type_dep}',[typedepenseController::class,'search']);

Route::get('/type_dep', [typedepenseController::class,'index']);

Route::get('/type_dep/{id}', [typedepenseController::class,'show']);


//table section

Route::get('/tabsection/search/{indentifiant_type_dep}',[tablesectionController::class,'search']);

Route::get('/tabsection', [tablesectionController::class,'index']);

Route::get('/tabsection/{id}', [tablesectionController::class,'show']);

//usb programme



Route::get('/programme/search/{indentifiant_type_dep}',[typeusb_programmeController::class,'search']);

Route::get('/programme', [typeusb_programmeController::class,'index']);

Route::get('/programme/{id}', [typeusb_programmeController::class,'show']);


//usb dotation

Route::get('/dotation/search/{indentifiant_type_dep}',[typeusb_dotationController::class,'search']);

Route::get('/dotation', [typeusb_dotationController::class,'index']);

Route::get('/dotation/{id}', [typeusb_dotationController::class,'show']);



//depense nature economique


Route::get('/depense_nateco/search/{indentifiant_type_dep}',[depense_nature_ecoController::class,'search']);

Route::get('/depense_nateco', [depense_nature_ecoController::class,'index']);

Route::get('/depense_nateco/{id}', [depense_nature_ecoController::class,'show']);





//groupe de service


Route::get('/groupe_serv/search/{indentifiant_type_dep}',[groupe_serviceController::class,'search']);

Route::get('/groupe_serv', [groupe_serviceController::class,'index']);

Route::get('/groupe_serv/{id}', [groupe_serviceController::class,'show']);









//protected routes
Route::group(['middleware' =>['auth:sanctum']], function () {

    //nature economique
    Route::post('/recette_nat_eco', [recette_nature_ecoController::class,'store']);

    Route::put('/recette_nat_eco/{id}', [recette_nature_ecoController::class,'update']);

    Route::delete('/recette_nat_eco/{id}', [recette_nature_ecoController::class,'destroy']);

    //source financement

    Route::post('/sourcefin', [sourcefinancementController::class,'store']);

    Route::put('/recette_nat_eco/{id}', [sourcefinancementController::class,'update']);

    Route::delete('/recette_nat_eco/{id}', [sourcefinancementController::class,'destroy']);

    //nature section

    Route::post('/nature_section', [naturesectionController::class,'store']);

    Route::put('/nature_section/{id}', [naturesectionController::class,'update']);

    Route::delete('/nature_section/{id}', [naturesectionController::class,'destroy']);



    //mission

    Route::post('/mission', [missionController::class,'store']);

    Route::put('/mission/{id}', [missionController::class,'update']);

    Route::delete('/mission/{id}', [missionController::class,'destroy']);



    //source depenses
    
    Route::post('/sourcedep', [sourcedepeseController::class,'store']);

    Route::put('/sourcedep/{id}', [sourcedepeseController::class,'update']);

    Route::delete('/sourcedep/{id}', [sourcedepeseController::class,'destroy']);


    //categorie budget

    Route::post('/categorie_budget', [categoriebudgetController::class,'store']);

    Route::put('/categrie_budget/{id}', [categoriebudgetController::class,'update']);

    Route::delete('/categrie_budget/{id}', [categoriebudgetController::class,'destroy']);


    //type de depenses

    Route::post('/type_dep', [typedepenseController::class,'store']);

    Route::put('/type_dep/{id}', [typedepenseController::class,'update']);

    Route::delete('/type_dep/{id}', [typedepenseController::class,'destroy']);

    //table de section


    Route::post('/tabsection', [tablesectionController::class,'store']);

    Route::put('/tabsection/{id}', [tablesectionController::class,'update']);

    Route::delete('/tabsection/{id}', [tablesectionController::class,'destroy']);


    //usb programme

    Route::post('/programme', [typeusb_programmeController::class,'store']);

    Route::put('/programme/{id}', [typeusb_programmeController::class,'update']);

    Route::delete('/programme/{id}', [typeusb_programmeController::class,'destroy']);



    //usb dotation

    Route::post('/dotation', [typeusb_dotationController::class,'store']);

    Route::put('/dotation/{id}', [typeusb_dotationController::class,'update']);

    Route::delete('/dtation/{id}', [typeusb_dotationController::class,'destroy']);



    //depense nature economique


    Route::post('/sourcedep', [sourcedepeseController::class,'store']);

    Route::put('/sourcedep/{id}', [sourcedepeseController::class,'update']);

    Route::delete('/sourcedep/{id}', [sourcedepeseController::class,'destroy']);





    //groupe de service


    Route::post('/groupe_serv', [groupe_serviceController::class,'store']);

    Route::put('/groupe_serv/{id}', [groupe_serviceController::class,'update']);

    Route::delete('/groupe_serv/{id}', [groupe_serviceController::class,'destroy']);












    Route::post('/logout', [AuthController::class,'logout']);





});
