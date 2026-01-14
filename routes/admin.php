<?php

use App\Http\Controllers\AppController;
use Wpint\Support\Facades\Route;


Route::admin('wpint', [AppController::class, 'app'])->register();

