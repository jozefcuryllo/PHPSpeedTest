<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step36 implements TestInterface {

    public function computation(): float
    {
    $step = new Step37();
        return $step->computation();
    }
}