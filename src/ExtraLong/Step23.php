<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step23 implements TestInterface {

    public function computation(): float
    {
    $step = new Step24();
        return $step->computation();
    }
}