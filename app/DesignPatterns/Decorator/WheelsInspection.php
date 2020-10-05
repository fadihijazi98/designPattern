<?php


namespace App\DesignPatterns\Decorator;


class WheelsInspection implements Inspection
{
    private $inspection;

    public function __construct(Inspection $inspection)
    {
        $this->inspection = $inspection;
    }

    public function cost()
    {
        return (15.99 + $this->inspection->cost());
    }

    public function description()
    {
        return (" Wheels Inspection," . $this->inspection->description());
    }
}
