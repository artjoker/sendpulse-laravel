<?php

namespace Artjoker\SendpulseLaravel;

use Illuminate\Support\Facades\Facade;
use Artjoker\SendpulseLaravel\Contracts\SendPulseApi;

class SendPulse extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return SendPulseApi::class;
    }
}