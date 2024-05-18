<?php
namespace FoodItems;

use FoodItems\FoodItem;

class CheeseBurger extends FoodItem {
    public function __construct() {
        parent::__construct("Cheese Burger", "Juicy grilled burger with cheese", 399);
    }
    public function getCategory(): string {
        return "Burger";
    }
}