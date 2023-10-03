<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', [UserController::class, 'register']);
Route::post('addproduct', [AdminController::class, 'addproduct']);
Route::post('addshop', [AdminController::class, 'addShop']);
Route::get('getshops/{userI}', [AdminController::class, 'getShops']);
Route::get('getproducts/{userId}', [AdminController::class, 'getProducts']);



Route::post('login', [UserController::class, 'login']);