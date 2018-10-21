<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step70 implements TestInterface {

    public function computation(): float
    {
    $step = new Step71();
        return $step->computation();
    }
}