<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SanctumRefresh;
use App\Http\Requests\LoginRequest;
use App\Services\Contracts\Token;
use App\Services\TokenIssuer;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;

class AuthController
{
    /**
     * @throws MustExtendHasApiTokens
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $user = $request->auth();
        $token = TokenIssuer::issue($user);
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
    public function logout(){
        $request = request();
        $deleteToken = $request->hasCookie('refresh_token') ?
            $request->cookie('refresh_token') :
            $request->get('refresh_token');
        $statusDelete = TokenIssuer::deleteToken($deleteToken);
        if ($statusDelete) {
            Cookie::forget('refresh_token');
            return response()->json(['message' => 'Token and cookie deleted successfully']);
        } else {
            return response()->json(['message' => 'Token not found or expired'], 404);
        }
    }
    public function getCurrentUser(Request $request)
    {
        $user = auth()->user();
        return response()->json(['user'=>$user]);
    }
}
