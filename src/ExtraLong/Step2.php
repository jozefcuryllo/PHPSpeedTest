<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step2 implements TestInterface {

    public function computation(): float
    {
    $step = new Step3();
        return $step->computation();
    }
}