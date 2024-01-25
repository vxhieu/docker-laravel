<?php

namespace App\Services\Contracts;

use Illuminate\Support\Collection;
use Laravel\Sanctum\NewAccessToken;
use App\Models\RefreshToken;

/**
 * @package App\Services
 * Author: HieuVX - Created Date : 24/1/2024
 */
class Token
{
    /**
     *
     */
    const AUTH_INVALID = 'AUTH_INVALID';

    /**
     * @param NewAccessToken $token
     * @param string $plainRefreshToken
     * @param RefreshToken $refreshToken
     */
    public function __construct(private readonly NewAccessToken $token,
                                private readonly string         $plainRefreshToken,
                                private readonly RefreshToken   $refreshToken)
    {
    }

    /**
     * @return Collection
     */
    public function getToken(): Collection
    {
        return collect([
            'refreshToken' => $this->refreshToken,
            'accessToken' => $this->token->accessToken,
            'plain' => [
                'accessToken' => $this->token->plainTextToken,
                'refreshToken' => $this->refreshToken->id . '|' . $this->plainRefreshToken,
            ],
        ]);
    }
}
