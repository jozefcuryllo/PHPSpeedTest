<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step42 implements TestInterface {

    public function computation(): float
    {
    $step = new Step43();
        return $step->computation();
    }
}