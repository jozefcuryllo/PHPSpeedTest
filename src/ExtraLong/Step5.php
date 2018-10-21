<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step5 implements TestInterface {

    public function computation(): float
    {
    $step = new Step6();
        return $step->computation();
    }
}