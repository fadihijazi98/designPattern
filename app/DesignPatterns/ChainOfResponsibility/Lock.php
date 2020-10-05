<?php


namespace App\DesignPatterns\ChainOfResponsibility;


class Lock extends HomeChecker
{

    public function check(HomeStatus $home)
    {
        if (!$home->locked) {
            return new \Exception("the door mush be locked");
        }
        return $this->next($home);
    }
}
