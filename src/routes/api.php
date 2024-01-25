<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as coreAdminGroup;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::prefix('auth')->controller(AuthController::class)->group(function () {
    if (!config('sanctum-refresh.sanctum_refresh.routes.refreshOnly')) {
        Route::post(config('sanctum-refresh.sanctum_refresh.routes.urls.login'), 'login')
            ->name('login')
            ->middleware(config('sanctum-refresh.sanctum_refresh.routes.middlewares.login'));
    }

    Route::post(config('sanctum-refresh.sanctum_refresh.routes.urls.refresh'), 'refresh')
        ->name('refresh')
        ->middleware(config('sanctum-refresh.sanctum_refresh.routes.middlewares.refresh'));
});
//Route::middleware('auth:sanctum')->group(function (): void {
//    //dashboard
//    Route::get('admin/dashboard', [CoreAdminGroup\DashBoardController::class, 'index']);
//});

