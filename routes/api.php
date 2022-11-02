<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\RestaurantController;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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




// Get all restaurants
Route::get('/restaurants', [RestaurantController::class, 'index']);

// add a restaurant
Route::post('/restaurants',[RestaurantController::class, 'store']);




// Get all foods
Route::get('/foods', [FoodController::class, 'index']);

// Add new Food
Route::post('/foods',[FoodController::class, 'store']);


//Get all foods of a particullar restaurant
Route::post('/restaurantFoods',[RestaurantController::class, 'getFoods']);





// Get all food Categories
Route::get('/categories', [CategoryController::class, 'index']);

// Add a new food category
Route::post('/categories',[CategoryController::class, 'store']);


// Get all foods belonging to a category
Route::post('/categoryFoods',[CategoryController::class, 'getCategoryFoods']);
