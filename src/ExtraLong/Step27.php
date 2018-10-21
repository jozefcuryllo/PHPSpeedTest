<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step27 implements TestInterface {

    public function computation(): float
    {
    $step = new Step28();
        return $step->computation();
    }
}