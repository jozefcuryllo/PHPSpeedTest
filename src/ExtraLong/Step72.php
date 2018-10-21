<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step72 implements TestInterface {

    public function computation(): float
    {
    $step = new Step73();
        return $step->computation();
    }
}