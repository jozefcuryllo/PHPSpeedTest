<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step94 implements TestInterface {

    public function computation(): float
    {
    $step = new Step95();
        return $step->computation();
    }
}