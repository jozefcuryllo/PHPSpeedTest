<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step82 implements TestInterface {

    public function computation(): float
    {
    $step = new Step83();
        return $step->computation();
    }
}