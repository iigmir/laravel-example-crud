<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\XkcdController;
use App\Http\Controllers\MemberController;

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

/**
 * @see <https://stackoverflow.com/a/34178797>
 */
Route::get("/", function () {
    return Response()->json(array(
        "message" => "Hello World!",
        "todolist" => array(
            "hello",
            "World",
            "API"
        )
    ));
});

Route::resource( "/xkcd", XkcdController::class );
Route::resource( "/member", MemberController::class );
