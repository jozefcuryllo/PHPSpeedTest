<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step18 implements TestInterface {

    public function computation(): float
    {
    $step = new Step19();
        return $step->computation();
    }
}