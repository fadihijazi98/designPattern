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

    public function next()
    {
        if ($this->successor) {
            return $this->successor->next();
        }
    }
}
