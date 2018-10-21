<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step7 implements TestInterface {

    public function computation(): float
    {
    $step = new Step8();
        return $step->computation();
    }
}