<?php


namespace App\DesignPatterns\Strategy;


class DatabaseLogger implements Log
{

    public function logData($data)
    {
        return "log ".$data." to project/loggers table";
    }
}
