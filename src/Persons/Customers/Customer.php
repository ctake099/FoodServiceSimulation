<?php

namespace Persons\Customers;

use Persons\Person;

class Customer extends Person {
    public function getRole(): string {
        return 'Customer';
    }

    public function getCustomerInfo(): string {
        return "Name: {$this->name}, Age: {$this->age}, Address: {$this->address}";
    }
}
