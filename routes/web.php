<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/create-account', function () {
    return view('create-account');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

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

Route::get('/admin/user-management', function () {
    return view('admin.user-management');
});

Route::get('/admin/farm-management', function () {
    return view('admin.farm-management');
});

Route::get('/admin/audit-logs', function () {
    return view('admin.audit-logs');
})  ;

Route::get('/admin/system-alerts', function () {
    return view('admin.system-alerts');
});

Route::get('/admin/add-user', function () {
    return view('admin.add-user');
});