<?php

namespace Laragle\Auth;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laragle\Auth\Skeleton\SkeletonClass
 */
class AuthFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auth';
    }
}
