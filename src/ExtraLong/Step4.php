<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step4 implements TestInterface {

    public function computation(): float
    {
    $step = new Step5();
        return $step->computation();
    }
}