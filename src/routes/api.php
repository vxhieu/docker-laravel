<?php

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
Route::prefix('auth')->controller(coreAdminGroup\AuthController::class)->group(function () {
    if (!config('sanctum-refresh.sanctum_refresh.routes.refreshOnly')) {
        Route::post(config('sanctum-refresh.sanctum_refresh.routes.urls.login'), 'login')
            ->name('login')
            ->middleware(config('sanctum-refresh.sanctum_refresh.routes.middlewares.login'));
        Route::post(config('sanctum-refresh.sanctum_refresh.routes.urls.logout'), 'logout')
            ->name('logout')
            ->middleware(config('sanctum-refresh.sanctum_refresh.routes.middlewares.logout'));
//        Route::get('sanctum-refresh.sanctum_refresh.routes.urls.user', 'getCurrentUser')
//            ->name('user')
//             ->middleware(config('sanctum-refresh.sanctum_refresh.routes.middlewares.logout'));
    }

    Route::post(config('sanctum-refresh.sanctum_refresh.routes.urls.refresh'), 'refresh')
        ->name('refresh')
        ->middleware(config('sanctum-refresh.sanctum_refresh.routes.middlewares.refresh'));
});

Route::middleware('auth:sanctum')->group(function (): void {
    //current user
    Route::get('/user', [coreAdminGroup\AuthController::class, 'getCurrentUser']);
    Route::resources([
        'roles' => coreAdminGroup\RoleController::class,
        'users' => coreAdminGroup\UserController::class,
    ]);
});
