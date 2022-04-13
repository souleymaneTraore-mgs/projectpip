<?php

use App\Http\Controllers\surcedepenseController;
use App\Http\Controllers\recette_nature_ecoController;
use App\Http\Controllers\typefinancementController;
use App\Http\Controllers\sourcefinancementController;
use App\Http\Controllers\typedepenseController;
use App\Http\Controllers\naturesectionController;
use App\Http\Controllers\missionController;
use App\Http\Controllers\categoriebudgetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\tablesectionController;
use App\Http\Controllers\typeusb_dotationController;
use App\Http\Controllers\typeusb_programmeController;
use App\Http\Controllers\depense_nature_ecoController;
use App\Http\Controllers\groupe_serviceController;
use App\Http\Controllers\zoneController;
use App\Http\Controllers\regionController;
use App\Http\Controllers\paysController;
use App\Http\Controllers\villeController;
use App\Http\Controllers\departementController;
use App\Http\Controllers\sous_prefectureController;
use App\Http\Controllers\type_groupeController;
use App\Http\Controllers\divisionController;
use App\Http\Controllers\groupeController;
use App\Http\Controllers\classeController;
use App\Http\Controllers\classe_groupeController;
use App\Http\Controllers\ministereController;
use App\Http\Controllers\recettemodefinController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\statusprivilegesController;
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


//admin routes

Route::middleware(['auth','role:admin'])->group(function(){
  Route::get('/private',function(){
    return 'bonjour Admin';
  });
});

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



//statutprivilèges

Route::get('/statut/search/{nomstatut}',[statusprivilegesController::class,'search']);

Route::get('/privileges', [statusprivilegesController::class,'index']);

Route::get('/statut/{id}', [statusprivilegesController::class,'show']);






//Nature section

Route::get('/nature_section/search/{nature_section}',[naturesectionController::class,'search']);

Route::get('/nature_section', [naturesectionController::class,'index']);

Route::get('/nature_section/{id}', [naturesectionController::class,'show']);


//source depense

Route::get('/F/search/{identifiant_dep}',[surcedepenseController::class,'search']);

Route::get('/sourcedep', [surcedepenseController::class,'index']);

Route::get('/sourcedep/{id}', [surcedepenseController::class,'show']);

//categorie budget

Route::get('/categorie_budget/search/{identifiant_dep}',[categoriebudgetController::class,'search']);

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


//zone

Route::get('/zone/search/{libelle_zone}',[zoneController::class,'search']);

Route::get('/zone', [zoneController::class,'index']);

Route::get('/zone/{id}', [zoneController::class,'show']);

//region


Route::get('/region/search/{indentifiant_type_dep}',[regionController::class,'search']);

Route::get('/region', [regionController::class,'index']);

Route::get('/region/{id}', [regionController::class,'show']);

//departement


Route::get('/departement/search/{indentifiant_type_dep}',[departementController::class,'search']);

Route::get('/departement', [departementController::class,'index']);

Route::get('/departement/{id}', [departementController::class,'show']);


//pays


Route::get('/pays/search/{indentifiant_type_dep}',[paysController::class,'search']);

Route::get('/pays', [paysController::class,'index']);

Route::get('/pays/{id}', [paysController::class,'show']);



//ville


Route::get('/ville/search/{indentifiant_type_dep}',[villeController::class,'search']);

Route::get('/ville', [villeController::class,'index']);

Route::get('/ville/{id}', [villeController::class,'show']);



//sous prefecture

Route::get('/sous_prefecture/search/{indentifiant_type_dep}',[sous_prefectureController::class,'search']);

Route::get('/sous_prefecture', [sous_prefectureController::class,'index']);

Route::get('/sous_prefecture/{id}', [sous_prefectureController::class,'show']);



//type groupe

Route::get('/type_groupe/search/{indentifiant_type_dep}',[type_groupeController::class,'search']);

Route::get('/type_groupe', [type_groupeController::class,'index']);

Route::get('/type_groupe/{id}', [type_groupeController::class,'show']);


//division

Route::get('/division/search/{indentifiant_type_dep}',[divisionController::class,'search']);

Route::get('/division', [divisionController::class,'index']);

Route::get('/division/{id}', [divisionController::class,'show']);



//groupe


Route::get('/groupe/search/{libellegroupe}',[groupeController::class,'search']);

Route::get('/groupe', [divisionController::class,'index']);

Route::get('/groupe/{id}', [divisionController::class,'show']);


//classe


Route::get('/classe/search/{indentifiant_type_dep}',[classeController::class,'search']);

Route::get('/classe', [divisionController::class,'index']);

Route::get('/classe/{id}', [divisionController::class,'show']);



//classe_groupe


Route::get('/classe_groupe/search/{indentifiant_type_dep}',[classe_groupeController::class,'search']);

Route::get('/classe_groupe', [classe_groupeController::class,'index']);

Route::get('/classe_groupe/{id}', [classe_groupeController::class,'show']);




//ministere


Route::get('/ministere/search/{indentifiant_type_dep}',[ministereController::class,'search']);

Route::get('/ministere', [ministereController::class,'index']);

Route::get('/ministere/{id}', [ministereController::class,'show']);


//role


Route::get('/role/search/{libellenamerole}',[roleController::class,'search']);

Route::get('/role', [roleController::class,'index']);

Route::get('/role/{id}', [roleController::class,'show']);

//import


Route::get('/import-form',[recette_nature_ecoController::class,'importForm']);

Route::post('/import', [recette_nature_ecoController::class,'import'])->name('recette.import');


//statutprivilèges








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
    
    Route::post('/sourcedep', [surcedepenseController::class,'store']);

    Route::put('/sourcedep/{id}', [surcedepenseController::class,'update']);

    Route::delete('/sourcedep/{id}', [surcedepenseController::class,'destroy']);


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


    Route::post('/sourcedep', [depense_nature_ecoController::class,'store']);

    Route::put('/sourcedep/{id}', [depense_nature_ecoController::class,'update']);

    Route::delete('/sourcedep/{id}', [depense_nature_ecoController::class,'destroy']);





    //groupe de service


    Route::post('/groupe_serv', [groupe_serviceController::class,'store']);

    Route::put('/groupe_serv/{id}', [groupe_serviceController::class,'update']);

    Route::delete('/groupe_serv/{id}', [groupe_serviceController::class,'destroy']);



    //zone


    Route::post('/zone', [zoneController::class,'store']);

    Route::put('/zone/{id}', [zoneController::class,'update']);

    Route::delete('/zone/{id}', [zoneController::class,'destroy']);




    //region



    Route::post('/region', [regionController::class,'store']);

    Route::put('/region/{id}', [regionController::class,'update']);

    Route::delete('/region/{id}', [regionController::class,'destroy']);




    //departement

    Route::post('/departement', [departementController::class,'store']);

    Route::put('/departement/{id}', [departementController::class,'update']);

    Route::delete('/departement/{id}', [departementController::class,'destroy']);





    //pays

    Route::post('/pays', [paysController::class,'store']);

    Route::put('/pays/{id}', [departementController::class,'update']);

    Route::delete('/pays/{id}', [departementController::class,'destroy']);





    //ville

    Route::post('/ville', [villeController::class,'store']);

    Route::put('/ville/{id}', [villeController::class,'update']);

    Route::delete('/ville/{id}', [villeController::class,'destroy']);






    //sous prefecture


    Route::post('/sous_prefecture', [sous_prefectureController::class,'store']);

    Route::put('/sous_prefecture/{id}', [villeController::class,'update']);

    Route::delete('/sous_prefecture/{id}', [villeController::class,'destroy']);






    //type groupe

    Route::post('/type_groupe', [type_groupeController::class,'store']);

    Route::put('/type_groupe/{id}', [villeController::class,'update']);

    Route::delete('/type_groupe/{id}', [villeController::class,'destroy']);




    //division

    Route::post('/division', [divisionController::class,'store']);

    Route::put('/division/{id}', [divisionController::class,'update']);

    Route::delete('/division/{id}', [divisionController::class,'destroy']);






    //groupe

    Route::post('/groupe', [groupeController::class,'store']);

    Route::put('/groupe/{id}', [groupeController::class,'update']);

    Route::delete('/groupe/{id}', [groupeController::class,'destroy']);





    //classe

    Route::post('/classe', [classeController::class,'store']);

    Route::put('/classe/{id}', [classeController::class,'update']);

    Route::delete('/classe/{id}', [classeController::class,'destroy']);







   //classe_groupe


    Route::post('/classe_groupe', [classe_groupeController::class,'store']);

    Route::put('/classe_groupe/{id}', [classe_groupeController::class,'update']);

    Route::delete('/classe_groupe/{id}', [classe_groupeController::class,'destroy']);








  //ministere


    Route::post('/ministere', [ministereController::class,'store']);

    Route::put('/ministere/{id}', [ministereController::class,'update']);

    Route::delete('/ministere/{id}', [ministereController::class,'destroy']);


  //role


    Route::post('/role_indo', [roleController::class,'store']);

    Route::put('/role/{id}', [roleController::class,'update']);

    Route::delete('/role/{id}', [roleController::class,'destroy']);

    // Status Privilèges

    Route::post('/statutpriv',[statusprivilegesController::class,'store']);

    Route::put('/privi{id}', [statusprivilegesController::class,'update']);

    Route::delete('/statut_des', [statusprivilegesController::class,'delete']);





    Route::post('/logout', [AuthController::class,'logout']);





});
