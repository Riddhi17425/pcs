<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginApiController;

use App\Http\Controllers\Api\ApplicationApiController;

route::Post('/login' , [LoginApiController::class , 'login']);

Route::middleware(['jwt.verify'])->group(function () {
    route::Post('/logout' , [LoginApiController::class , 'logout']);
});
