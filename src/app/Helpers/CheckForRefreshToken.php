<?php

namespace App\Helpers;

use App\Exceptions\InvalidTokenException;
use App\Models\RefreshToken;
use Carbon\Carbon;

/**
 * @package App\Helpers
 * Author : HieuVX - Created Date; 24/01/2024
 */
class CheckForRefreshToken
{
    /**
     * @throws InvalidTokenException
     */
    public static function check(string $givenToken): bool
    {
        if (!str_contains($givenToken, '|')) {
            throw new InvalidTokenException();
        }

        $tokenId = explode('|', $givenToken);
        $userToken = $tokenId[array_key_last($tokenId)];
        $tokenId = (int)$tokenId[array_key_first($tokenId)];

        if (!$tokenId) {
            throw new InvalidTokenException();
        }

        $token = RefreshToken::find($tokenId);

        if (!$token || !hash_equals($token->token, hash('sha256', $userToken)) || Carbon::parse($token->expires_at)->lt(now())) {
            throw new InvalidTokenException();
        }

        return true;
    }
}
