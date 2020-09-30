<?php


namespace App\DesignPatterns\Template;


class StoreOrder extends Order
{

    public function isOnlinePayment()
    {
        return false;
    }

    public function purchaseProcedures($creditCardNumber = null)
    {
        return "payment by the vendor";
    }
}
