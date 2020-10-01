<?php


namespace App\DesignPatterns\Strategy;


class RTAppLogger
{
    public function log($data, Log $logger = null) {
        $logger = $logger ? $logger : new FileLogger();
        return $logger->logData($data);
    }
}
