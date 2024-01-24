<?php

namespace App\Traits;

use App\Models\RefreshToken;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @package App\Traits
 * Author HieuVx - Created Date 24/01/2024
 */
trait HasRefreshable
{
    public function refreshToken(): HasOne
    {
        return $this->hasOne(RefreshToken::class, 'token_id', 'id');
    }

}
