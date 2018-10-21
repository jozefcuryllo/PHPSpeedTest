<?php

namespace PHPSpeedTest\Long;

use PHPSpeedTest\TestInterface;

class Step1 implements TestInterface {

    public function computation(): float
    {
        $step = new Step2();

        return $step->computation();
    }
}