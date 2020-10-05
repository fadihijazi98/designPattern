<?php


namespace App\DesignPatterns\ChainOfResponsibility;


abstract class HomeChecker
{
    public $successor;

    abstract public function check(HomeStatus $home);

    public function setSuccessor(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next($status)
    {
        if (is_null($this->successor)) {
            return "all issues fine; you can sleep now!";
        } else {
            $this->successor->next($status);
            return $this->successor->check($status);
        }
    }
}
