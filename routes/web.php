<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::post('/agendar-avaliacao', [LeadController::class, 'store'])->name('lead.store');

Route::name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('index');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/leads', [LeadController::class, 'index'])->name('lead');
    Route::get('/leads/exportar', [LeadController::class, 'export'])->name('lead.export');
});

Route::fallback(function () {
    return redirect()->route('home');
});
