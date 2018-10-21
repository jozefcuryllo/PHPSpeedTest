<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step77 implements TestInterface {

    public function computation(): float
    {
    $step = new Step78();
        return $step->computation();
    }
}