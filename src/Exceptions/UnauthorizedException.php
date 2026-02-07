<?php

namespace Hztiny\TinyCore\Exceptions;

use Exception;

class UnauthorizedException extends Exception
{
    /**
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct($message = 'Unauthorized', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
