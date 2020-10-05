<?php


namespace App\DesignPatterns\Observer;


class LoginReporter implements Observer
{
    public function handle()
    {
        return "the observable has been notified. LoginReporter::class";
    }
}
