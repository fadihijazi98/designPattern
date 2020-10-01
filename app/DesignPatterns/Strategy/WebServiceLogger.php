<?php


namespace App\DesignPatterns\Strategy;


class WebServiceLogger implements Log
{

    public function logData($data)
    {
        return "log ".$data." to web service";
    }
}
