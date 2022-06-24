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
//All Post
Route::get('/', [ListingController::class, 'index']);


//Create Post
Route::get('/listings/create', [ListingController::class, 'create']);

//Single Post
Route::POST('/listings', [ListingController::class, 'store']);

//Edit Post
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Submit Edit Form
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Single Post
Route::get('/listings/{listing}', [ListingController::class, 'show']);

