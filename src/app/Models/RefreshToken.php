<?php

namespace App\Models;

use App\Helpers\SanctumRefresh;
use Illuminate\Database\Eloquent\Model;

class RefreshToken extends Model
{
    protected $table = "refresh_tokens";
    protected $fillable = ['token', 'token_id', 'expires_at'];

    protected $casts = [
        'expires_at' => 'datetime',
    ];

    protected $hidden = ['token'];

    public function accessToken()
    {
        return $this->belongsTo(SanctumRefresh::$model, 'token_id', 'id');
    }
}
