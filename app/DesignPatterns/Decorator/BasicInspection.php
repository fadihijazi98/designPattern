<?php


namespace App\DesignPatterns\Decorator;


class BasicInspection implements Inspection
{
    public function cost()
    {
        return 10.5;
    }

    public function description()
    {
        return " Basin Inspection";
    }
}
