<?php

namespace PHPSpeedTest\Long;

use PHPSpeedTest\TestInterface;

class Step4 implements TestInterface {

    public function computation(): float
    {
        $step = new Step5();

        return $step->computation();
    }
}