<?php

namespace Hztiny\TinyCore\Exceptions;

use Exception;

class ForbiddenException extends Exception
{
    /**
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct($message = 'Forbidden', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
