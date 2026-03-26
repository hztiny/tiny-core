<?php

namespace Hztiny\TinyCore\Exceptions;

use ReflectionClass;
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

        $finalMessage = $message ?: $this->generateFallbackMessage();

        parent::__construct($finalMessage, $code, $previous);
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
    protected function generateFallbackMessage()
    {
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/([A-Z])/', ' $1', $class));
    }
}
