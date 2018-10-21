<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step49 implements TestInterface {

    public function computation(): float
    {
    $step = new Step50();
        return $step->computation();
    }
}