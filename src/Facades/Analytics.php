<?php


namespace Shaden\Analytics\Facades;

use Illuminate\Support\Facades\Facade;
class Analytics extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Analytics';
    }
}
