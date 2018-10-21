<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step15 implements TestInterface {

    public function computation(): float
    {
    $step = new Step16();
        return $step->computation();
    }
}