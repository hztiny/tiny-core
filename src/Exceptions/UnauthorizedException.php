<?php

namespace Hztiny\TinyCore\Exceptions;

use Illuminate\Support\Facades\Lang;

class UnauthorizedException extends TinyI18nException
{
    /**
     * @param array $context
     * @return string
     */
    protected function resolveI18nMessage($context)
    {
        return Lang::get('exception.unauthorized', $context);
    }
}
