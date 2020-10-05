<?php


namespace App\DesignPatterns\Specification;


class CustomerIsGold implements ISpecification
{
    private $customer;

    public function __construct(Customer $customer = null)
    {
        $this->customer = $customer;
    }

    public function isSatisfy(Customer $customer = null)
    {
        if(is_null($customer))
            return $this->customer->getType() === "gold";
        else
            return $customer->getType() === "gold";
    }
}
