<?php

namespace App\Exceptions;
/**
 * @package App\Exceptions
 * Author: HieuVx - Created Date: 24/01/2024
 */

class InvalidModelException extends \Exception
{
    public function __construct($model)
    {
        parent::__construct("$model is invalid instance.");
    }
}
