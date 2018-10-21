<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step100 implements TestInterface {

    public function computation(): float
    {
    $step = new Short();
        return $step->computation();
    }
}