<?php


namespace App\DesignPatterns\Specification;


class CustomerRepository
{
    private $customers;

    public function __construct(array $customers)
    {
        $this->customers = $customers;
    }

    public function getCustomerThatSpecify(ISpecification $specification)
    {
        $result = [];
        foreach ($this->customers as $customer) {
            if ($specification->isSatisfy($customer)) {
                $result[] = $customer;
            }
        }
        return $result;
    }
}
