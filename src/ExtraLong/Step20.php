<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step20 implements TestInterface {

    public function computation(): float
    {
    $step = new Step21();
        return $step->computation();
    }
}