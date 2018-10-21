<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step74 implements TestInterface {

    public function computation(): float
    {
    $step = new Step75();
        return $step->computation();
    }
}