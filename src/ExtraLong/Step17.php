<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step17 implements TestInterface {

    public function computation(): float
    {
    $step = new Step18();
        return $step->computation();
    }
}