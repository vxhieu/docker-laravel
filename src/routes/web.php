<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as coreAdminGroup;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(coreAdminGroup\AdminController::class)->group(function () {
    Route::get('/admin', 'index')->name('page.login');
});
// Redirect to the dashboard after successful login
Route::get('/admin/dashboard', function () {
    return view('themes.OneUI.index');
})->name('admin.dashboard');
