<?php

use App\Http\Controllers\Api\CharacterController;
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

// Resources.
Route::apiResource('characters', CharacterController::class);

// Logged-in routes.
Route::middleware('auth:api')->group(static function ()
{
});
