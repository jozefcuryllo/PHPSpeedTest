<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step14 implements TestInterface {

    public function computation(): float
    {
    $step = new Step15();
        return $step->computation();
    }
}