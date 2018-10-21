<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step34 implements TestInterface {

    public function computation(): float
    {
    $step = new Step35();
        return $step->computation();
    }
}