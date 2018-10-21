<?php

namespace PHPSpeedTest\Long;

use PHPSpeedTest\TestInterface;

class Step5 implements TestInterface {

    public function computation(): float
    {
        $step = new Step6();

        return $step->computation();
    }
}