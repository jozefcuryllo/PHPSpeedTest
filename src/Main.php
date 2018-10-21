<?php

namespace PHPSpeedTest;

use Dotenv\Dotenv;
use Exception;
use PHPSpeedTest\ExtraLong\ExtraLong;
use PHPSpeedTest\Long\Long;
use PHPSpeedTest\Short\Short;
use SebastianBergmann\Timer\Timer;

class Main{


    private function loadDotEnv($path = __DIR__ . "/.."){
        $dotenv = new Dotenv($path);
        $dotenv->load();
    }

    private function runVersionScript($version){
        switch ($version){
            case 'short': {
                $main = new Short();
                $main->computation();
                break;
            }
            case 'long': {
                $main = new Long();
                $main->computation();
                break;
            }
            case 'extralong': {
                $main = new ExtraLong();
                $main->computation();
                break;
            }
            default:
                new Exception('Please, set in .env which version of script you want to run.');
        }
    }

    private function getVersion(){
        return strtolower(getenv('VERSION'));
    }

    public function index(){

        $this->loadDotEnv();

        Timer::start();

        $this->runVersionScript($this->getVersion());

        Timer::stop();

        echo Timer::resourceUsage();
    }

}