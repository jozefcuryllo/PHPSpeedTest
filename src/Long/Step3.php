<?php

namespace PHPSpeedTest\Long;

use PHPSpeedTest\TestInterface;

class Step3 implements TestInterface {

    public function computation(): float
    {
        $step = new Step4();

        return $step->computation();
    }
}