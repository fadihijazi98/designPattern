<?php


namespace App\DesignPatterns\Observer;


interface Subject
{
    public function attach($observable);
    public function detach($observable);
    public function notify();
}
