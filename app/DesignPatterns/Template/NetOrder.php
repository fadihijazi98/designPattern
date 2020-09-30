<?php


namespace App\DesignPatterns\Template;


class NetOrder extends Order
{

    public function isOnlinePayment()
    {
        return true;
    }

    public function purchaseProcedures($creditCardNumber = null)
    {
        return "payment by credit number that has number: ".$creditCardNumber;
    }
}
