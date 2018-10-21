<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;

class ExtraLong implements TestInterface
{

    public function computation(): float
    {
        $step = new Step1();

        return $step->computation();
    }

    public function createSteps(int $from = 0, int $to = 150) : bool{

        for($i = $from; $i < $to; $i++){
            $result = $this->createStep($i);

            if(!$result)
                return false;
        }

        $result = $this->createStep($to, true);

        if(!$result)
            return false;


        return true;
    }

    private function createStep(int $number, bool $isFinal = false): bool
    {
        $filename = "src/ExtraLong/" . "Step" . strval($number) . ".php";

        $step = fopen($filename, "w");

        if(!$step)
            return false;

        $code = '<?php

namespace PHPSpeedTest\ExtraLong;

use PHPSpeedTest\TestInterface;
use PHPSpeedTest\Short\Short;

class Step'. strval($number) .' implements TestInterface {

    public function computation(): float
    {
    ';
        if ($isFinal) {
            $code .= '$step = new Short();';
        } else {
            $code .= '$step = new Step'.strval($number + 1).'();';
        }
        $code .= '
        return $step->computation();
    }
}';
        fwrite($step, $code);

        return fclose($step);
    }
}