<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;

Route::get("/test", function () {
    return "El backend funciona correctamente";
});
Route::get("/backend", [BackendController::class, 'getAll']);

Route::get("/backend/{id?}", [BackendController::class, 'get']);

Route::post("/backend", [BackendController::class, 'create']);

Route::put("/backend/{id}", [BackendController::class, 'update']);

Route::delete("/backend/{id}", [BackendController::class, 'delete']);
