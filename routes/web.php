<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');

Route::fallback(function () {
    return app(PortfolioController::class)->index();
});
