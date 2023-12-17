<?php

namespace Orange7354\PracticePackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Orange7354\PracticePackage\PracticePackage
 */
class PracticePackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Orange7354\PracticePackage\PracticePackage::class;
    }
}
