<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "welcome";
});


//Route::get("voiture/{id}/{marque}",[VoitureController::class,"destroy"])->where(["id"=>"[0-9]+","marque"=>"[a-z]+"]);
// create
Route::post("client/liste",[ClientController::class,"store"]);
Route::get("client/create",[ClientController::class,"create"]);
//read
Route::get("client",[ClientController::class,"index"]);
//update
Route::get("client/{id}/edit",[ClientController::class,"edit"]);
Route::put("client/{id}",[ClientController::class,"update"]);
//delete
Route::get("client/destroy/{id}",[ClientController::class,"destroy"]);