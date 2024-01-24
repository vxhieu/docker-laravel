<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SanctumRefresh;
use App\Http\Requests\LoginRequest;
use App\Services\Token;
use App\Services\TokenIssuer;
use Illuminate\Http\JsonResponse;
class AuthController
{
    /**
     * @throws MustExtendHasApiTokens
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $token = TokenIssuer::issue($request->auth());

        if ($token === Token::AUTH_INVALID) {
            return response()->json([
                'message' => 'Invalid Credentials!',
            ], 401);
        }

        return response()->json([
            'message' => SanctumRefresh::$authedMessage,
            'token' => $token->get('plain')['accessToken'],
            'token_expires_in' => $token->get('accessToken')->expires_at,
            'refresh_token' => $token->get('plain')['refreshToken'],
            'refresh_token_expires_in' => $token->get('refreshToken')->expires_at,
        ])
            ->withCookie(cookie('refresh_token', $token->get('plain')['refreshToken'], httpOnly: true));
    }

    public function refresh():JsonResponse
    {
        $request = request();

        $refreshToken = $request->hasCookie('refresh_token') ?
            $request->cookie('refresh_token') :
            $request->get('refresh_token');

        $newToken = TokenIssuer::refreshToken($refreshToken);


        return response()->json([
            'token' => $newToken->get('plain')['accessToken'],
            'token_expires_in' => $newToken->get('accessToken')->expires_at,
            'refresh_token' => $newToken->get('plain')['refreshToken'],
            'refresh_token_expires_in' => $newToken->get('refreshToken')->expires_at,
        ])
            ->withCookie(cookie('refresh_token', $newToken->get('plain')['refreshToken'], httpOnly: true));
    }
}
