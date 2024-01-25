<?php

namespace App\Exceptions;
/**
 * @package App\Exceptions
 * Author: HieuVx - Created Date: 24/01/2024
 */
class MustExtendHasApiTokens extends \Exception
{
    public function __construct(string $model, int $code = 0, $previous = null)
    {
        parent::__construct("Your $model must extends Laravel\Sanctum\HasApiTokens", $code, $previous);
    }
}
