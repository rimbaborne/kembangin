<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Kembangin Project
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
