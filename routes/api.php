<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request): mixed {
    return $request->user();
})->middleware('auth:api');
