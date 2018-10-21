<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step26 implements TestInterface {

    public function computation(): float
    {
    $step = new Step27();
        return $step->computation();
    }
}