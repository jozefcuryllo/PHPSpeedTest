<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step81 implements TestInterface {

    public function computation(): float
    {
    $step = new Step82();
        return $step->computation();
    }
}