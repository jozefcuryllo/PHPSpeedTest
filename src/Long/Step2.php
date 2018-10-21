<?php

namespace PHPSpeedTest\Long;

use PHPSpeedTest\TestInterface;

class Step2 implements TestInterface {

    public function computation(): float
    {
        $step = new Step3();

        return $step->computation();
    }
}