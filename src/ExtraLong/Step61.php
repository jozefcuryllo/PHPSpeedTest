<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step61 implements TestInterface {

    public function computation(): float
    {
    $step = new Step62();
        return $step->computation();
    }
}