<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step63 implements TestInterface {

    public function computation(): float
    {
    $step = new Step64();
        return $step->computation();
    }
}