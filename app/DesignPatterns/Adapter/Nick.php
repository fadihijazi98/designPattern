<?php


namespace App\DesignPatterns\Adapter;


class Nick implements ReaderInterface
{
    public function turnOn() {
        return "Nick-message: turn on Nick";
    }
    public function nextPressButton() {
        return "Nick-message: next press button";
    }
}
