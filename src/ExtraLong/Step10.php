<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step10 implements TestInterface {

    public function computation(): float
    {
    $step = new Step11();
        return $step->computation();
    }
}