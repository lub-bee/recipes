<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReceipeController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UniteController;
use App\Http\Controllers\UserController;
use App\Models\Step;
use App\Models\Task;
use App\Models\Unite;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource("/favorite", FavoriteController::class);
Route::resource("/user", UserController::class);

Route::get("/",[ReceipeController::class, "index"]);
Route::post("/receipe/{receipe_id}/store_step",[ReceipeController::class, "store_step"])->name("receipe.store_step");
Route::post("/receipe/{receipe_id}/store_requirement",[ReceipeController::class, "store_requirement"])->name("receipe.store_requirement");
Route::delete("/receipe/destroy_step",[ReceipeController::class, "destroy_step"])->name("receipe.destroy_step");
Route::delete("/receipe/destroy_requirement",[ReceipeController::class, "destroy_requirement"])->name("receipe.destroy_requirement");
Route::get("/reader/{receipe_id}/{step_num?}",[ReceipeController::class, "reader"])->name("reader");
Route::resource("/receipe", ReceipeController::class);

Route::resource("/unite", UniteController::class);

// Route::get("/receipe/{receipe_id}/requirement",[RequirementController::class, "index"])->name("receipe.requirement");
Route::post("/requirement/{receipe_id}/store_ingredients", [RequirementController::class, "ingredients_store"])->name("requirement.store_ingredients");


Route::resource("/ingredient", IngredientController::class);



Route::get('/dashboard', [PageController::class, "dashboard"])->middleware(['auth'])->name('dashboard');

// Route::get('/taskboard', function () {
//     return view('taskboard');
// })->middleware(['auth'])->name('taskboard');
Route::get("/taskboard", [TaskController::class, "index"])->middleware("auth")->name("taskboard");

Route::get('/cgu', function () {
    return view('page.cgu');
})->name("cgu");

Route::get('/faq', function () {
    return view('page.faq');
})->name("faq");

require __DIR__.'/auth.php';
