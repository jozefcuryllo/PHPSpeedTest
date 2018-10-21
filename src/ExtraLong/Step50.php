<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step50 implements TestInterface {

    public function computation(): float
    {
    $step = new Step51();
        return $step->computation();
    }
}