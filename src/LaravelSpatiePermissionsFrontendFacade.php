<?php

namespace Havennow\LaravelSpatiePermissionsFrontend;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Havennow\LaravelSpatiePermissionsFrontend\LaravelSpatiePermissionsFrontend
 */
class LaravelSpatiePermissionsFrontendFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-spatie-permissions-frontend';
    }
}
