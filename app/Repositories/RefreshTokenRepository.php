<?php

namespace App\Repositories;

use App\Models\RefreshToken;
use App\Helpers\CheckForRefreshToken;

/**
 * @package App\Repositories
 * Author HieuVX - Created Date: 24/1/2024
 */
class RefreshTokenRepository
{
    /**
     * @param int $tokenId
     * @return bool
     */
    public function revokeRefreshTokenFromTokenId(int $tokenId): bool
    {
        $find = RefreshToken::where('token_id', $tokenId)->first();
        if ($find) {
            $find->delete();

            return true;
        }

        return false;
    }

    public function revokeRefreshTokenFromToken(string $plainRefreshToken): void
    {
        CheckForRefreshToken::check($plainRefreshToken);

        $findTokenId = explode('|', $plainRefreshToken);
        $findTokenId = $findTokenId[array_key_first($findTokenId)];

        RefreshToken::find($findTokenId)->delete();
    }
}
