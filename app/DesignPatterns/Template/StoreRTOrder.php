<?php


namespace App\DesignPatterns\Template;


class StoreRTOrder extends RTOrder
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
