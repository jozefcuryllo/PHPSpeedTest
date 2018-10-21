<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step6 implements TestInterface {

    public function computation(): float
    {
    $step = new Step7();
        return $step->computation();
    }
}