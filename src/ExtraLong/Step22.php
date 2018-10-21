<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step22 implements TestInterface {

    public function computation(): float
    {
    $step = new Step23();
        return $step->computation();
    }
}