<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step62 implements TestInterface {

    public function computation(): float
    {
    $step = new Step63();
        return $step->computation();
    }
}