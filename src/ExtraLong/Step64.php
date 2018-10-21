<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step64 implements TestInterface {

    public function computation(): float
    {
    $step = new Step65();
        return $step->computation();
    }
}