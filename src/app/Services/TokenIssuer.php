<?php

namespace App\Services;

use App\Exceptions\InvalidTokenException;
use App\Exceptions\MustExtendHasApiTokens;
use App\Models\RefreshToken;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Services\Contracts\Token;

/**
 * @package App\Services
 * Author: HieuVX - Creared Date: 24/01/2024
 */
class TokenIssuer
{
    /**
     * @throws MustExtendHasApiTokens
     */
    public static function issue( $user, string $tokenName = 'web', array $config = []): Collection|string
    {
        if (!$user) {
            return Token::AUTH_INVALID;
        }

        if (!method_exists($user, 'createToken')) {
            throw new MustExtendHasApiTokens(get_class($user));
        }

        $token = $user->createToken($tokenName,
            $config['abilities'] ?? ['*'],
            $config['token_expires_at'] ??
            now()->addMinutes(config('sanctum-refresh.expiration.access_token')));

        $plainRefreshToken = Str::random(40);

        $refreshToken = RefreshToken::create([
            'token' => hash('sha256', $plainRefreshToken),
            'expires_at' => $config['refresh_expires_at'] ??
                now()->addMinutes(config('sanctum-refresh.expiration.refresh_token')),
            'token_id' => $token->accessToken->id,
        ]);

        return (new Token($token, $plainRefreshToken, $refreshToken))->getToken();
    }

    /**
     * @throws InvalidTokenException
     */
    public static function refreshToken(string $refreshToken, string $tokenName = 'web', array $config = []): Collection|string
    {
        if (!str_contains($refreshToken, '|')) {
            throw new InvalidTokenException();
        }

        // Parse the token id
        $tokenId = explode('|', $refreshToken)[0];

        // Find token from given id
        $token = RefreshToken::with('accessToken')
            ->where('expires_at', '>', now())
            ->find($tokenId);
        if (!$token) {
            throw new InvalidTokenException();
        }

        // Regenerate token.
        dd($token);
        $newToken = $token->accessToken->tokenable
            ->createToken($tokenName,
                $config['abilities'] ?? ['*'],
                $config['token_expires_at'] ??
                now()->addMinutes(config('sanctum-refresh.expiration.access_token')));

        $plainRefreshToken = Str::random(40);
        $refreshToken = RefreshToken::create([
            'token_id' => $newToken->accessToken->id,
            'token' => hash('sha256', $plainRefreshToken),
            'expires_at' => $config['refresh_expires_at'] ??
                now()->addMinutes(config('sanctum-refresh.expiration.refresh_token')),
        ]);

        // Delete current token (revoke refresh token)
        $token->accessToken->delete();
        $token->delete();

        return (new Token($newToken, $plainRefreshToken, $refreshToken))->getToken();
    }
}
