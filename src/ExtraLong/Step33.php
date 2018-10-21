<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step33 implements TestInterface {

    public function computation(): float
    {
    $step = new Step34();
        return $step->computation();
    }
}