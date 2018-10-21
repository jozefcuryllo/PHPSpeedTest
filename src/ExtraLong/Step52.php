<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step52 implements TestInterface {

    public function computation(): float
    {
    $step = new Step53();
        return $step->computation();
    }
}