<?php

namespace App\Traits;

use App\Services\TokenIssuer;
use App\Repositories\RefreshTokenRepository;
use Illuminate\Support\Collection;

/**
 * @package App\Traits
 * Author HieuVx - Created Date 24/01/2024
 */
trait HasRefreshableToken
{
    /**
     * @throws MustExtendHasApiTokens
     */
    public function createTokenWithRefresh(string $name, array $config = []): Collection
    {
        return TokenIssuer::issue($this, $name, $config);
    }

    public function revokeBothToken(): bool
    {
        $accTokens = $this->load('tokens')->tokens->all();
        $refreshToken = new RefreshTokenRepository();
        if ($accTokens) {
            foreach ($accTokens as $accToken) {
                if ($accToken->id) {
                    $refreshToken->revokeRefreshTokenFromTokenId($accToken->id);
                    $accToken->delete();

                    return true;
                }
            }
        }

        return false;
    }

}
