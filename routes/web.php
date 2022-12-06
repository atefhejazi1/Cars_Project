<?php

use App\Http\Controllers\AccessorieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetergentController;
use App\Http\Controllers\ExtrassController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SparePartsDepartmentController;
use App\Http\Controllers\OilsController;
use App\Http\Controllers\SparePartsItemsController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\AssignOp\Concat;

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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';





Route::resource('department', SparePartsDepartmentController::class)->middleware('auth');
Route::resource('sparePartsItems', SparePartsItemsController::class)->middleware('auth');
Route::resource('oils', OilsController::class)->middleware('auth');
Route::resource('extras', ExtrassController::class)->middleware('auth');
Route::resource('detergent', DetergentController::class)->middleware('auth');
Route::resource('accessorie', AccessorieController::class)->middleware('auth');
Route::resource('contact', ContactController::class)->middleware('auth');

Route::get('/website/serviceRequest', function () {return view('website/serviceRequest');});
Route::get('/website/spareParts', function () {return view('website/spareParts');});
Route::get('/website/soon', function () {return view('website/soon');});
