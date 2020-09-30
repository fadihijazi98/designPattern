<?php


namespace App\DesignPatterns\Adapter;


class Kindle implements ReaderInterface
{
    public function turnOn() {
        return "Kindle-message: turn on Kindle";
    }
    public function nextPressButton() {
        return "Kindle-message: next press button";
    }
}
