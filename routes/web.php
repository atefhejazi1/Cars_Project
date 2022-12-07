<?php

use App\Http\Controllers\AccessorieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetergentController;
use App\Http\Controllers\ExtrassController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\OilsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SparePartsDepartmentController;
use App\Http\Controllers\SparePartsItemsController;
use App\Http\Controllers\StripePaymentController;
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
//     return view('index');
// });

// sign in with Google
Route::get('auth/google', [GoogleAuthController::class, 'redirectGoogle'])->name('google-auth');
Route::get('auth/google/call-back/', [GoogleAuthController::class, 'callbackGoogle']);

// sign in with Facebook
Route::controller(FacebookController::class)->group(function () {
    Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
    Route::get('auth/facebook/callback/', 'handleFacebookCallback');
});

// payment Geteway with Stripe
Route::controller(StripePaymentController::class)->group(function () {
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

// payment Geteway with PayPal
Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');


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
Route::resource('dashboard/oils', OilsController::class)->middleware('auth');
Route::resource('dashboard/extras', ExtrassController::class)->middleware('auth');
Route::resource('dashboard/detergent', DetergentController::class)->middleware('auth');
Route::resource('dashboard/accessorie', AccessorieController::class)->middleware('auth');
Route::resource('dashboard/contact', ContactController::class)->middleware('auth');

//show only 5 sparePartsItems in Main Page
Route::get('/', [SparePartsItemsController::class, 'view']);

//show all sparePartsItems in Main Page
Route::get('/website/ShopNowSparePartsItems', [SparePartsItemsController::class, 'ShopNowSparePartsItems']);




Route::get('/website/serviceRequest', function () {return view('website/serviceRequest');});
Route::get('/website/spareParts', function () {return view('website/spareParts');});
Route::get('/website/soon', function () {return view('website/soon');});
