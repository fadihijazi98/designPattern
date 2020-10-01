<?php


namespace App\DesignPatterns\ChainOfResponsibility;


class Light extends HomeChecker
{

    public function check(HomeStatus $home)
    {
        if (!$home->lightOff) {
            return new \Exception("The light must be off");
        }
        return $this->next();
    }
}
