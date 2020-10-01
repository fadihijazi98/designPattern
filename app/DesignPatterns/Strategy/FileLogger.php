<?php


namespace App\DesignPatterns\Strategy;


class FileLogger implements Log
{

    public function logData($data)
    {
        return "log ".$data." to file driver";
    }
}
