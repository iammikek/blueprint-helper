<?php

namespace Automica\AutomicaBlueprintHelper\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Automica\AutomicaBlueprintHelper\BlueprintHelper
 */
class BlueprintHelper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Automica\AutomicaBlueprintHelper\BlueprintHelper::class;
    }
}
