<?php

namespace Automica\BlueprintHelper\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Automica\BlueprintHelper\BlueprintHelper
 */
class BlueprintHelper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Automica\BlueprintHelper\BlueprintHelper::class;
    }
}
