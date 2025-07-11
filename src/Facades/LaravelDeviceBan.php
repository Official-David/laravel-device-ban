<?php

namespace DavidAdigwu\LaravelDeviceBan\Facades;

/**
 * @see \DavidAdigwu\LaravelDeviceBan\LaravelDeviceBan
 */
use Illuminate\Support\Facades\Facade;

class LaravelDeviceBan extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \DavidAdigwu\LaravelDeviceBan\LaravelDeviceBan::class;
    }
}
