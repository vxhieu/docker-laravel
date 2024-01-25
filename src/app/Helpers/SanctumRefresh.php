<?php

namespace App\Helpers;


use App\Http\Controllers\Admin\AuthController;
use App\Models\PersonalAccessToken;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Sanctum;
use ReflectionClass;

/**
 * @package App\Helpers
 * Author : HieuVX - Created Date; 24/01/2024
 */
class SanctumRefresh
{
    public static string $authedMessage = '';

    public static string $middlewareMsg = '';

    // Use sanctum personal access token model as default.
    public static string $model = PersonalAccessToken::class;

    /**
     * Use custom personal access token model
     * This also alter sanctum personal access token.
     *
     * @throws InvalidModelException
     */
    public static function usePersonalAccessTokenModel(string|callable $model): void
    {
        if (class_exists($model)) {
            $checkModel = new ReflectionClass($model);
            if (
                $checkModel->getParentClass() !== false &&
                ($checkModel->getParentClass()->name === Model::class ||
                    $checkModel->getParentClass()->name === PersonalAccessToken::class)
            ) {
                Sanctum::usePersonalAccessTokenModel($model);
                self::$model = $model;
            }
        }

    }

    public static function boot(): void
    {
        self::$authedMessage = config('sanctum-refresh.sanctum_refresh.message.authed');
        self::$middlewareMsg = config('sanctum-refresh.sanctum_refresh.message.invalidMsg');
    }
}
