<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step21 implements TestInterface {

    public function computation(): float
    {
    $step = new Step22();
        return $step->computation();
    }
}