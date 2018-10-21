<?php

namespace PHPSpeedTest\Short;

use PHPSpeedTest\TestInterface;

class Short implements TestInterface {

    public function computation() : float
    {
        $result = 0.0;
        for($i = 0; $i<100000; $i++){
            $result *= $i;
        }

        return $result;
    }
}