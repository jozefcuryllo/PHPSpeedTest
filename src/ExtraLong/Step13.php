<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step13 implements TestInterface {

    public function computation(): float
    {
    $step = new Step14();
        return $step->computation();
    }
}