<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step12 implements TestInterface {

    public function computation(): float
    {
    $step = new Step13();
        return $step->computation();
    }
}