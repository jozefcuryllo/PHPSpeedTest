<?php

namespace PHPSpeedTest\Long;

use PHPSpeedTest\TestInterface;

class Step7 implements TestInterface {

    public function computation(): float
    {
        $step = new Step8();

        return $step->computation();
    }
}