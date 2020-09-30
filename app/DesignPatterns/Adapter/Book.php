<?php


namespace App\DesignPatterns\Adapter;


class Book implements BookInterface
{
    public function open() {
        return "Reader-message: open book.";
    }
    public function turnOnPage() {
        return "Reader-message: turn on page";
    }
}
