<?php


namespace App\DesignPatterns\Observer;


class LoginHandler implements Observer
{
    public function handle()
    {
        return "the observer has been notified. LoginHandler::class";
    }
}
