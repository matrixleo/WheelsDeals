<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
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
//All Listings
Route::get('/', [ListingController::class, 'index']);


//Create Listing
Route::get('/listings/create', [ListingController::class, 'create']);

//Single Listing
Route::POST('/listings', [ListingController::class, 'store']);





//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

