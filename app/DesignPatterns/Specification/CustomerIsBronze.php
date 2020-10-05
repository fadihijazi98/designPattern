<?php


namespace App\DesignPatterns\Specification;


class CustomerIsBronze implements ISpecification
{
    private $customer;

    public function __construct(Customer $customer = null)
    {
        $this->customer = $customer;
    }

    public function isSatisfy(Customer $customer = null)
    {
        if(is_null($customer))
            return $this->customer->getType() === "bronze";
        else
            return $customer->getType() === "bronze";
    }
}
