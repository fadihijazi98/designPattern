<?php


namespace App\DesignPatterns\Template;


abstract class Order
{
    public function make()
    {
        $message = array();
        $message[] = $this->products();
        if ($this->isOnlinePayment()) {
            $message[] = $this->purchaseProcedures("3-99-9000");
        } else {
            $message[] = $this->purchaseProcedures();
        }
        $message[] = $this->assertPaymentProcess();
        return $message;
    }

    public function products()
    {
        return "products ids: 88039, 88104, 99203, 10500 and 11020";
    }

    public function assertPaymentProcess()
    {
        return "the customer made purchase";
    }

    abstract public function isOnlinePayment();
    abstract public function purchaseProcedures($creditCardNumber=null);

}
