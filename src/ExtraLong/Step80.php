<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step80 implements TestInterface {

    public function computation(): float
    {
    $step = new Step81();
        return $step->computation();
    }
}