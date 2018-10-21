<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step11 implements TestInterface {

    public function computation(): float
    {
    $step = new Step12();
        return $step->computation();
    }
}