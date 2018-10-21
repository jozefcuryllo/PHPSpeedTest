<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step32 implements TestInterface {

    public function computation(): float
    {
    $step = new Step33();
        return $step->computation();
    }
}