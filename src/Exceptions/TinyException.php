<?php

namespace Hztiny\TinyCore\Exceptions;

use RuntimeException;

class TinyException extends RuntimeException
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

        $message = $message ?: $this->getDefaultMessage();

        parent::__construct($message, $code, $previous);
    }

    /**
     * @return array
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @return string
     */
    protected function getDefaultMessage()
    {
        $fullClassName = get_class($this);

        $className = substr($fullClassName, strrpos($fullClassName, '\\') + 1);

        return '[Tiny] ' . preg_replace('/(?<!^)[A-Z]/', ' $0', $className);
    }
}
