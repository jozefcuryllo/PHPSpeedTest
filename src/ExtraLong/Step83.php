<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step83 implements TestInterface {

    public function computation(): float
    {
    $step = new Step84();
        return $step->computation();
    }
}