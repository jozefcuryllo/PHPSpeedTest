<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step16 implements TestInterface {

    public function computation(): float
    {
    $step = new Step17();
        return $step->computation();
    }
}