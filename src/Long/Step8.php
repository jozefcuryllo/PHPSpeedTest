<?php

namespace PHPSpeedTest\Long;

use PHPSpeedTest\Short\Short;
use PHPSpeedTest\TestInterface;

class Step8 implements TestInterface {

    public function computation(): float
    {
        $step = new Short();

        return $step->computation();
    }
}