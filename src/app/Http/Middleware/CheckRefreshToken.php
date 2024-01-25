<?php

namespace App\Http\Middleware;

use App\Exceptions\InvalidTokenException;
use App\Helpers\CheckForRefreshToken;
use App\Helpers\SanctumRefresh;
use Closure;
use Illuminate\Http\Request;

/**
 * @package App\Http\Middleware
 * Author: HieuVX - Created Date: 24/01/2024
 */
class CheckRefreshToken
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check refresh token.
        $refreshToken = $request->hasCookie('refresh_token') ?
            $request->cookie('refresh_token') :
            $request->get('refresh_token');

        if (!$refreshToken) {
            return response()->json([
                'message' => SanctumRefresh::$middlewareMsg,
            ], 400);
        }

        try {
            CheckForRefreshToken::check($refreshToken);

            return $next($request);
        } catch (InvalidTokenException $e) {
            return response()->json([
                'message' => SanctumRefresh::$middlewareMsg,
                'reason' => $e->getMessage(),
            ], 400);
        }
    }
}
