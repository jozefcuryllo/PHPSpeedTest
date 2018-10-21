<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step98 implements TestInterface {

    public function computation(): float
    {
    $step = new Step99();
        return $step->computation();
    }
}