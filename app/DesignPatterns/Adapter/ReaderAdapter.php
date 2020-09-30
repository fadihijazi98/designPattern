<?php


namespace App\DesignPatterns\Adapter;


class ReaderAdapter implements BookInterface
{
    private $reader;
    public function __construct(ReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    public function open()
    {
        return $this->reader->turnOn();
    }

    public function turnOnPage()
    {
        return $this->reader->nextPressButton();
    }
}
