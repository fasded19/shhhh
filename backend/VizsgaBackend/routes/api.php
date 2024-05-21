<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\ResultsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/getplayers",[PlayersController::class, "getPlayers"]);
Route::get("/getplayer/{id}",[PlayersController::class, "getPlayer"]);

Route::get("/getresults",[ResultsController::class, "getResults"]);
Route::post("/addresult",[ResultsController::class, "addResult"]);
Route::get("/getresult/{id}",[ResultsController::class, "getResult"]);
Route::put("/updateresult/{id}",[ResultsController::class, "updateResult"]);
Route::delete("/deleteresult/{id}",[ResultsController::class, "deleteResult"]);
