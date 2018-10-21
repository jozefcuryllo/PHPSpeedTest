<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step8 implements TestInterface {

    public function computation(): float
    {
    $step = new Step9();
        return $step->computation();
    }
}