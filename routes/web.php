<?php

use App\Http\Controllers\StarController;
use Illuminate\Support\Facades\Route;

Route::resource('stars', StarController::class)->except(['show']);

Route::redirect('/', route('stars.index'))->name('dashboard');