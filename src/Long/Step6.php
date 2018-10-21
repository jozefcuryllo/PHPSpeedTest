<?php

namespace PHPSpeedTest\Long;

use PHPSpeedTest\TestInterface;

class Step6 implements TestInterface {

    public function computation(): float
    {
        $step = new Step7();

        return $step->computation();
    }
}