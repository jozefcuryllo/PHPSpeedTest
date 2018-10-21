<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step60 implements TestInterface {

    public function computation(): float
    {
    $step = new Step61();
        return $step->computation();
    }
}