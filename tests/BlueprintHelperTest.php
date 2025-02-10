<?php

declare(strict_types=1);

use Automica\BlueprintHelper\BlueprintHelper;

it('can reseed', function () {

    $sot = new BlueprintHelper;

    expect($sot->reseed())->toBeTrue();
});
