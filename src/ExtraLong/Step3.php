<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step3 implements TestInterface {

    public function computation(): float
    {
    $step = new Step4();
        return $step->computation();
    }
}