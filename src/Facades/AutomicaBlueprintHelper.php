<?php

namespace Automica\AutomicaBlueprintHelper\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Automica\AutomicaBlueprintHelper\AutomicaBlueprintHelper
 */
class AutomicaBlueprintHelper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Automica\AutomicaBlueprintHelper\AutomicaBlueprintHelper::class;
    }
}
