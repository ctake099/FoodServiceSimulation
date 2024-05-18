<?php
namespace FoodItems;

use FoodItems\FoodItem;

class Fettuccine extends FoodItem {
    public function __construct() {
        parent::__construct("Fettuccine Alfredo", "Creamy pasta with Parmesan cheese", 350);
    }
    public function getCategory(): string {
        return "pasta";
    }
}