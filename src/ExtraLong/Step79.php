<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step79 implements TestInterface {

    public function computation(): float
    {
    $step = new Step80();
        return $step->computation();
    }
}