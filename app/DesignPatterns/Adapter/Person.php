<?php


namespace App\DesignPatterns\Adapter;


class Person
{
    private $book;
    public function __construct(BookInterface $book)
    {
        $this->book = $book;
    }

    public function read() {
        $message[] = $this->book->open();
        $message[] = $this->book->turnOnPage();
        dd($message);
    }
}
