<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::post('/agendar-avaliacao', [LeadController::class, 'store'])->name('lead.store');

Route::fallback(function () {
    return redirect()->route('home');
});
