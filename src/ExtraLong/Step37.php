<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step37 implements TestInterface {

    public function computation(): float
    {
    $step = new Step38();
        return $step->computation();
    }
}