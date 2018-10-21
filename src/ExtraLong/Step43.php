<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step43 implements TestInterface {

    public function computation(): float
    {
    $step = new Step44();
        return $step->computation();
    }
}