<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step99 implements TestInterface {

    public function computation(): float
    {
    $step = new Step100();
        return $step->computation();
    }
}