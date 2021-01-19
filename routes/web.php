<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CatalogTypeController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RoleController;
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
Route::middleware(['auth'])->group(function () {

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('articles',ArticleController::class);
Route::resource('catalogs',CatalogController::class);
Route::resource('catalog_types',CatalogTypeController::class);
Route::resource('centers',CenterController::class);
Route::resource('customers',CustomerController::class);
Route::resource('producers',ProducerController::class);
Route::resource('users', UserController::class);
Route::resource('countries', CountryController::class);
Route::resource('roles', RoleController::class);

//Route::get('planning_catalog', [PlanningCatalogController::class, 'index']);

});

require __DIR__.'/auth.php';