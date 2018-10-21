<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step29 implements TestInterface {

    public function computation(): float
    {
    $step = new Step30();
        return $step->computation();
    }
}