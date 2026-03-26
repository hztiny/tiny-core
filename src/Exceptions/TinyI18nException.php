<?php

namespace Hztiny\TinyCore\Exceptions;

abstract class TinyI18nException extends TinyException
{
    /**
     * @param array $context
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct($context = [], $code = 0, $previous = null)
    {
        $message = $this->resolveI18nMessage($context);

        parent::__construct($message, $context, $code, $previous);
    }

    /**
     * @param array $context
     * @return string
     */
    abstract protected function resolveI18nMessage($context);
}
