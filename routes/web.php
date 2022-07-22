<?php

use App\Http\Controllers\IngredientController;
use App\Http\Controllers\ReceipeController;
use App\Http\Controllers\RequirementController;
use App\Models\Step;
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
    return view('welcome');
});


Route::get("/home",                                         [ReceipeController::class, "index"]);
Route::post("/receipe/{receipe_id}/store_step",             [ReceipeController::class, "store_step"])->name("receipe.store_step");
Route::post("/receipe/{receipe_id}/store_requirement",      [ReceipeController::class, "store_requirement"])->name("receipe.store_requirement");
Route::delete("/receipe/destroy_step",                      [ReceipeController::class, "destroy_step"])->name("receipe.destroy_step");
Route::delete("/receipe/destroy_requirement",               [ReceipeController::class, "destroy_requirement"])->name("receipe.destroy_requirement");
Route::resource("/receipe",                                 ReceipeController::class);

// Route::get("/receipe/{receipe_id}/requirement",[RequirementController::class, "index"])->name("receipe.requirement");
Route::post("/requirement/{receipe_id}/store_ingredients", [RequirementController::class, "ingredients_store"])->name("requirement.store_ingredients");


Route::resource("/ingredient", IngredientController::class);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
