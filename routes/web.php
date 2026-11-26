<?php

use App\Http\Controllers\FarmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::post('/login', [LoginController::class, 'login']);


Route::get('/', function () {
    return view('login');
})->name('login');

// Route::get('/create-account', function () {
//     return view('create-account');
// });

Route::get('/forgot-password', function () {
    return view('forgot-password');
});


Route::middleware('auth:web')->group(function (){
    
    Route::post('/create-account', [UserController::class, 'create'])->name('create-account');
    Route::get('/delete-account/{id}', [UserController::class, 'delete'])->name('delete-account');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/analytics', function () {
        return view('analytics');
    });

    Route::get('/alerts', function () {
        return view('alerts');
    });

    Route::get('/control', function () {
        return view('control');
    });

    Route::get('/settings', function () {
        return view('settings');
    });

    Route::get('/admin/user-management', [UserController::class, 'index'])->name('admin-usermanagement');

    Route::get('/admin/farm-management', [FarmController::class, 'index'])->name('admin-farmmanagement');
    Route::post('/admin/add-farm', [FarmController::class, 'create'])->name('create-farm');
    


    Route::get('/admin/audit-logs', function () {
        return view('admin.audit-logs');
    });

    Route::get('/admin/system-alerts', function () {
        return view('admin.system-alerts');
    });

    Route::get('/admin/add-user', function () {
        return view('admin.add-user');
    })->name('add-user');


});

