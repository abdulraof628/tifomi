<?php

use App\Http\Controllers\RoleController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware('auth')->name('/admin')->group(function () {
    Route::get('/roles', [RoleController::class, 'index'])->name('roles');
});

require __DIR__.'/auth.php';
