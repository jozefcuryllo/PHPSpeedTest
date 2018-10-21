<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step92 implements TestInterface {

    public function computation(): float
    {
    $step = new Step93();
        return $step->computation();
    }
}