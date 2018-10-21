<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step51 implements TestInterface {

    public function computation(): float
    {
    $step = new Step52();
        return $step->computation();
    }
}