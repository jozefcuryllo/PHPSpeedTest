<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step89 implements TestInterface {

    public function computation(): float
    {
    $step = new Step90();
        return $step->computation();
    }
}