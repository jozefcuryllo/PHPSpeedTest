<?php

namespace PHPSpeedTest\Long;

use PHPSpeedTest\TestInterface;

class Long implements TestInterface
{

    public function computation(): float
    {
        $step = new Step1();

        return $step->computation();
    }

}