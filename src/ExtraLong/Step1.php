<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step1 implements TestInterface {

    public function computation(): float
    {
    $step = new Step2();
        return $step->computation();
    }
}