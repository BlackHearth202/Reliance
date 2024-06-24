<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\RelianceController;


Route::get('/', [RelianceController::class, 'index']);

Route::get('/features', [RelianceController::class, 'features'])->name('features');

Route::get('/integrations', [RelianceController::class, 'integrations'])->name('integrations');

Route::get('/support', [RelianceController::class, 'support'])->name('support');


Route::get('/employeeM', [RelianceController::class, 'employeeM'])->name('employeeM');

Route::get('/HR', [RelianceController::class, 'HR'])->name('HR');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
