<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step24 implements TestInterface {

    public function computation(): float
    {
    $step = new Step25();
        return $step->computation();
    }
}