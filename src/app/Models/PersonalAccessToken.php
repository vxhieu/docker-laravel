<?php

namespace App\Models;

use App\Traits\HasRefreshable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PersonalAccessToken extends \Laravel\Sanctum\PersonalAccessToken
{
    use HasFactory, HasRefreshable;
}
