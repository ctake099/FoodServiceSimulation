<?php
spl_autoload_extensions(".php"); 
spl_autoload_register(function ($class) {
    // 名前空間をディレクトリ構造に変換
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    "require_onceでimportする";
    require_once 'src/' . $class . '.php';
});

$cheeseBurger = new FoodItems\CheeseBurger();
$hawaiianPizza = new FoodItems\HawaiianPizza();
$spaghetti = new FoodItems\Spaghetti();
$fettuccine = new FoodItems\Fettuccine();

$customer = new Persons\Customers\Customer("John Doe", 30, "123 Main St");
echo $customer->getCustomerInfo() . "\n"; // Name: John Doe, Age: 30, Address: 123 Main St

echo $cheeseBurger->getName() . "\n";
echo $cheeseBurger->getDescription() . "\n";
echo $cheeseBurger->getPrice() . "\n";

echo $hawaiianPizza->getName() . "\n";
echo $hawaiianPizza->getDescription() . "\n";
echo $hawaiianPizza->getPrice() . "\n";

echo $spaghetti->getName() . "\n";
echo $spaghetti->getDescription() . "\n";
echo $spaghetti->getPrice() . "\n";

echo $fettuccine->getName() . "\n";
echo $fettuccine->getDescription() . "\n";
echo $fettuccine->getPrice() . "\n";
