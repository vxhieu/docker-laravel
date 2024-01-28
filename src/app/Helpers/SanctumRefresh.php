<?php

namespace App\Helpers;
use Laravel\Sanctum\PersonalAccessToken;

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

}
