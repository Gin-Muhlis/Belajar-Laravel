<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

route::get('/test', [homeController::class, "index"]);