<?php
spl_autoload_extensions(".php"); 
spl_autoload_register(function ($class) {
    // 名前空間をディレクトリ構造に変換
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    "require_onceでimportする";
    require_once 'src/' . $class . '.php';
});
use Persons\Customers\Customer;
use FoodItems\CheeseBurger;

$cheeseBurger = new CheeseBurger("w cheese", "description of cheese", 150);
$customer = new Customer("John Doe", 30, "123 Main St");
echo $customer->getCustomerInfo() . "\n"; // Name: John Doe, Age: 30, Address: 123 Main St
echo $cheeseBurger->getName() . "\n";
echo $cheeseBurger->getDescription() . "\n";
echo $cheeseBurger->getPrice() . "\n";
