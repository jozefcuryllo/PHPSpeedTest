<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step97 implements TestInterface {

    public function computation(): float
    {
    $step = new Step98();
        return $step->computation();
    }
}