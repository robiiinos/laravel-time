<?php

use Illuminate\Support\Facades\Route;
use Robiiinos\LaravelTime\Http\Controllers\TimeController;

Route::get('/time', TimeController::class)->name('time');
