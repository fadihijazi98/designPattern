<?php


namespace App\DesignPatterns\ChainOfResponsibility;


class Alarm extends HomeChecker
{

    public function check(HomeStatus $home)
    {
        if (!$home->alarmOn) {
            return new \Exception("alaram should be on");
        }
        return $this->next($home);
    }
}
