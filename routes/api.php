<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiSpmbController;

Route::apiResource('/apiSpmb', ApiSpmbController::class);
