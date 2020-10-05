<?php


namespace App\DesignPatterns\Observer;


class EmailNotify implements Observer
{
    public function handle()
    {
        return "new observe has been notified. EmailNotify::class";
    }
}
