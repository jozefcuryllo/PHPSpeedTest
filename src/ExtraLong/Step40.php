<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step40 implements TestInterface {

    public function computation(): float
    {
    $step = new Step41();
        return $step->computation();
    }
}