<?php

declare(strict_types=1);

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Client\TicketController as ClientTicketController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\TicketManagementController;
use App\Http\Controllers\Technician\TechnicianController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function (): void {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/', function () {
    if (auth()->check()) {
        $user = auth()->user();

        return match ($user->role) {
            'admin' => redirect()->route('dashboard.index'),
            'technician' => redirect()->route('technician.dashboard'),
            'client' => redirect()->route('client.tickets.index'),
        };
    }

    return view('landing');
})->name('home');

Route::middleware(['auth'])->group(function (): void {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard/tickets', [TicketManagementController::class, 'index'])->name('dashboard.tickets.index');
    Route::get('/dashboard/tickets/{id}', [TicketManagementController::class, 'show'])->name('dashboard.tickets.show');
    Route::put('/dashboard/tickets/{id}/status', [TicketManagementController::class, 'updateStatus'])->name('dashboard.tickets.update-status');
    Route::post('/dashboard/tickets/{id}/assign/{technicianId}', [TicketManagementController::class, 'assignTechnician'])->name('dashboard.tickets.assign');

    Route::prefix('technician')->name('technician.')->group(function (): void {
        Route::get('/dashboard', [TechnicianController::class, 'dashboard'])->name('dashboard');
        Route::get('/tickets', [TechnicianController::class, 'index'])->name('tickets.index');
        Route::get('/tickets/{id}', [TechnicianController::class, 'show'])->name('tickets.show');
        Route::put('/tickets/{id}/status', [TechnicianController::class, 'updateStatus'])->name('tickets.update-status');
    });

    Route::prefix('client')->name('client.')->group(function (): void {
        Route::get('/dashboard', [DashboardController::class, 'clientDashboard'])->name('dashboard');
        Route::get('/tickets', [ClientTicketController::class, 'index'])->name('tickets.index');
        Route::get('/tickets/create', [ClientTicketController::class, 'create'])->name('tickets.create');
        Route::post('/tickets', [ClientTicketController::class, 'store'])->name('tickets.store');
        Route::get('/tickets/{id}', [ClientTicketController::class, 'show'])->name('tickets.show');
    });
});

Route::get('/test', [TestController::class, 'index']);
