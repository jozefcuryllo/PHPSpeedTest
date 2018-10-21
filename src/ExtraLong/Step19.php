<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step19 implements TestInterface {

    public function computation(): float
    {
    $step = new Step20();
        return $step->computation();
    }
}