<?php

namespace Hztiny\TinyCore\Exceptions;

use Exception;

class ReasonException extends Exception
{
    /**
     * @var array
     */
    protected $context;

    /**
     * @param string $message
     * @param array $context
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct($message = '', $context = [], $code = 0, $previous = null)
    {
        $this->context = $context;

        parent::__construct($message, $code, $previous);
    }

    /**
     * @return array
     */
    public function getContext()
    {
        return $this->context;
    }
}
