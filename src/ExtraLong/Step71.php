<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step71 implements TestInterface {

    public function computation(): float
    {
    $step = new Step72();
        return $step->computation();
    }
}