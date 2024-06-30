<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;

Route::get('articles/exclude/', [ArticlesController::class, 'exclude']);
