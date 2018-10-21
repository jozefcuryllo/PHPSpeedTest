<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step31 implements TestInterface {

    public function computation(): float
    {
    $step = new Step32();
        return $step->computation();
    }
}