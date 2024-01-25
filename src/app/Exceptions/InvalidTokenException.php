<?php

namespace App\Exceptions;
/**
 * @package App\Exceptions
 * Author: HieuVx - Created Date: 24/01/2024
 */
class InvalidTokenException extends \Exception
{
    public function __construct()
    {
        parent::__construct('Your provided token is invalid.');
    }
}
