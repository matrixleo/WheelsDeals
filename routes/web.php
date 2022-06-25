<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

//Update Post 
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Delete Post
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//Single Post
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Register/Create Form
Route::get('/register',[UserController::class, 'create']);

//Create new User
Route::post('/users',[UserController::class, 'store']);

//Log User Out
Route::post('/logout',[UserController::class, 'logout']); 

//Show Log In
Route::get('/login', [UserController::class, 'login']);

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);