<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step91 implements TestInterface {

    public function computation(): float
    {
    $step = new Step92();
        return $step->computation();
    }
}