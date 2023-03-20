<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AdminsUserController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
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

Route::group(['middleware' => 'auth:sanctum'], function () {
    //All secure URL's
    
});

Route::post("product",[ProductsController::class,'create']);
Route::put("product",[ProductsController::class,'update']);
Route::delete("product/{id?}",[ProductsController::class,'delete']);
Route::get('product/{id?}',[ProductsController::class, 'show']);

Route::get("admin/indexInfo",[AdminPageController::class,'indexInfor']);

Route::post("admin/login", [UsersController::class, 'index']);
Route::post("admin/register", [UsersController::class, 'register']);

Route::post("comment/",[CommentsController::class, 'addComment']);
Route::get("comment/{id?}",[CommentsController::class, 'showAllComment']);