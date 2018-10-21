<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step9 implements TestInterface {

    public function computation(): float
    {
    $step = new Step10();
        return $step->computation();
    }
}