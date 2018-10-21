<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step90 implements TestInterface {

    public function computation(): float
    {
    $step = new Step91();
        return $step->computation();
    }
}